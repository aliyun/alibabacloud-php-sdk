<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models;

use AlibabaCloud\Dara\Model;

class AuthLoginWithThirdUserInfoRequest extends Model
{
    /**
     * @var mixed[]
     */
    public $extInfo;

    /**
     * @var string
     */
    public $sceneCode;

    /**
     * @var string
     */
    public $thirdUserIdentifier;

    /**
     * @var string
     */
    public $thirdUserType;
    protected $_name = [
        'extInfo' => 'ExtInfo',
        'sceneCode' => 'SceneCode',
        'thirdUserIdentifier' => 'ThirdUserIdentifier',
        'thirdUserType' => 'ThirdUserType',
    ];

    public function validate()
    {
        if (\is_array($this->extInfo)) {
            Model::validateArray($this->extInfo);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->extInfo) {
            if (\is_array($this->extInfo)) {
                $res['ExtInfo'] = [];
                foreach ($this->extInfo as $key1 => $value1) {
                    $res['ExtInfo'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->sceneCode) {
            $res['SceneCode'] = $this->sceneCode;
        }

        if (null !== $this->thirdUserIdentifier) {
            $res['ThirdUserIdentifier'] = $this->thirdUserIdentifier;
        }

        if (null !== $this->thirdUserType) {
            $res['ThirdUserType'] = $this->thirdUserType;
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
        if (isset($map['ExtInfo'])) {
            if (!empty($map['ExtInfo'])) {
                $model->extInfo = [];
                foreach ($map['ExtInfo'] as $key1 => $value1) {
                    $model->extInfo[$key1] = $value1;
                }
            }
        }

        if (isset($map['SceneCode'])) {
            $model->sceneCode = $map['SceneCode'];
        }

        if (isset($map['ThirdUserIdentifier'])) {
            $model->thirdUserIdentifier = $map['ThirdUserIdentifier'];
        }

        if (isset($map['ThirdUserType'])) {
            $model->thirdUserType = $map['ThirdUserType'];
        }

        return $model;
    }
}
