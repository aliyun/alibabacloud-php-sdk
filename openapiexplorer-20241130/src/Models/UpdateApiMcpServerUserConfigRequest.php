<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OpenAPIExplorer\V20241130\Models;

use AlibabaCloud\Dara\Model;

class UpdateApiMcpServerUserConfigRequest extends Model
{
    /**
     * @var bool
     */
    public $enablePublicAccess;

    /**
     * @var string[]
     */
    public $vpcWhitelists;
    protected $_name = [
        'enablePublicAccess' => 'enablePublicAccess',
        'vpcWhitelists' => 'vpcWhitelists',
    ];

    public function validate()
    {
        if (\is_array($this->vpcWhitelists)) {
            Model::validateArray($this->vpcWhitelists);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->enablePublicAccess) {
            $res['enablePublicAccess'] = $this->enablePublicAccess;
        }

        if (null !== $this->vpcWhitelists) {
            if (\is_array($this->vpcWhitelists)) {
                $res['vpcWhitelists'] = [];
                $n1 = 0;
                foreach ($this->vpcWhitelists as $item1) {
                    $res['vpcWhitelists'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['enablePublicAccess'])) {
            $model->enablePublicAccess = $map['enablePublicAccess'];
        }

        if (isset($map['vpcWhitelists'])) {
            if (!empty($map['vpcWhitelists'])) {
                $model->vpcWhitelists = [];
                $n1 = 0;
                foreach ($map['vpcWhitelists'] as $item1) {
                    $model->vpcWhitelists[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
