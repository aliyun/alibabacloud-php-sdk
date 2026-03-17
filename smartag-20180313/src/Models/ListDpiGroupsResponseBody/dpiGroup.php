<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Smartag\V20180313\Models\ListDpiGroupsResponseBody;

use AlibabaCloud\Dara\Model;

class dpiGroup extends Model
{
    /**
     * @var string
     */
    public $dpiGroupId;

    /**
     * @var string
     */
    public $dpiGroupName;

    /**
     * @var string
     */
    public $minEngineVersion;

    /**
     * @var string
     */
    public $minSignatureDbVersion;
    protected $_name = [
        'dpiGroupId' => 'DpiGroupId',
        'dpiGroupName' => 'DpiGroupName',
        'minEngineVersion' => 'MinEngineVersion',
        'minSignatureDbVersion' => 'MinSignatureDbVersion',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dpiGroupId) {
            $res['DpiGroupId'] = $this->dpiGroupId;
        }

        if (null !== $this->dpiGroupName) {
            $res['DpiGroupName'] = $this->dpiGroupName;
        }

        if (null !== $this->minEngineVersion) {
            $res['MinEngineVersion'] = $this->minEngineVersion;
        }

        if (null !== $this->minSignatureDbVersion) {
            $res['MinSignatureDbVersion'] = $this->minSignatureDbVersion;
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
        if (isset($map['DpiGroupId'])) {
            $model->dpiGroupId = $map['DpiGroupId'];
        }

        if (isset($map['DpiGroupName'])) {
            $model->dpiGroupName = $map['DpiGroupName'];
        }

        if (isset($map['MinEngineVersion'])) {
            $model->minEngineVersion = $map['MinEngineVersion'];
        }

        if (isset($map['MinSignatureDbVersion'])) {
            $model->minSignatureDbVersion = $map['MinSignatureDbVersion'];
        }

        return $model;
    }
}
