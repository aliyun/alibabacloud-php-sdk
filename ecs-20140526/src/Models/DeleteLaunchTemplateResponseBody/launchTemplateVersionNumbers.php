<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DeleteLaunchTemplateResponseBody;

use AlibabaCloud\Dara\Model;

class launchTemplateVersionNumbers extends Model
{
    /**
     * @var int[]
     */
    public $versionNumbers;
    protected $_name = [
        'versionNumbers' => 'versionNumbers',
    ];

    public function validate()
    {
        if (\is_array($this->versionNumbers)) {
            Model::validateArray($this->versionNumbers);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->versionNumbers) {
            if (\is_array($this->versionNumbers)) {
                $res['versionNumbers'] = [];
                $n1 = 0;
                foreach ($this->versionNumbers as $item1) {
                    $res['versionNumbers'][$n1] = $item1;
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
        if (isset($map['versionNumbers'])) {
            if (!empty($map['versionNumbers'])) {
                $model->versionNumbers = [];
                $n1 = 0;
                foreach ($map['versionNumbers'] as $item1) {
                    $model->versionNumbers[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
