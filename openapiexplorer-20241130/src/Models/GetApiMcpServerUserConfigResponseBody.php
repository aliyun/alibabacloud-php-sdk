<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OpenAPIExplorer\V20241130\Models;

use AlibabaCloud\Dara\Model;

class GetApiMcpServerUserConfigResponseBody extends Model
{
    /**
     * @var string
     */
    public $accountId;

    /**
     * @var bool
     */
    public $enablePublicAccess;

    /**
     * @var string
     */
    public $gmtCreate;

    /**
     * @var string
     */
    public $gmtModified;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string[]
     */
    public $vpcWhitelists;
    protected $_name = [
        'accountId' => 'accountId',
        'enablePublicAccess' => 'enablePublicAccess',
        'gmtCreate' => 'gmtCreate',
        'gmtModified' => 'gmtModified',
        'requestId' => 'requestId',
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
        if (null !== $this->accountId) {
            $res['accountId'] = $this->accountId;
        }

        if (null !== $this->enablePublicAccess) {
            $res['enablePublicAccess'] = $this->enablePublicAccess;
        }

        if (null !== $this->gmtCreate) {
            $res['gmtCreate'] = $this->gmtCreate;
        }

        if (null !== $this->gmtModified) {
            $res['gmtModified'] = $this->gmtModified;
        }

        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
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
        if (isset($map['accountId'])) {
            $model->accountId = $map['accountId'];
        }

        if (isset($map['enablePublicAccess'])) {
            $model->enablePublicAccess = $map['enablePublicAccess'];
        }

        if (isset($map['gmtCreate'])) {
            $model->gmtCreate = $map['gmtCreate'];
        }

        if (isset($map['gmtModified'])) {
            $model->gmtModified = $map['gmtModified'];
        }

        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
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
