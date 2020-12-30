<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Smartag\V20180313\Models\ListDpiGroupsResponseBody;

use AlibabaCloud\Tea\Model;

class dpiGroup extends Model
{
    /**
     * @var string
     */
    public $minSignatureDbVersion;

    /**
     * @var string
     */
    public $dpiGroupName;

    /**
     * @var string
     */
    public $dpiGroupId;

    /**
     * @var string
     */
    public $minEngineVersion;
    protected $_name = [
        'minSignatureDbVersion' => 'MinSignatureDbVersion',
        'dpiGroupName'          => 'DpiGroupName',
        'dpiGroupId'            => 'DpiGroupId',
        'minEngineVersion'      => 'MinEngineVersion',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->minSignatureDbVersion) {
            $res['MinSignatureDbVersion'] = $this->minSignatureDbVersion;
        }
        if (null !== $this->dpiGroupName) {
            $res['DpiGroupName'] = $this->dpiGroupName;
        }
        if (null !== $this->dpiGroupId) {
            $res['DpiGroupId'] = $this->dpiGroupId;
        }
        if (null !== $this->minEngineVersion) {
            $res['MinEngineVersion'] = $this->minEngineVersion;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return dpiGroup
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MinSignatureDbVersion'])) {
            $model->minSignatureDbVersion = $map['MinSignatureDbVersion'];
        }
        if (isset($map['DpiGroupName'])) {
            $model->dpiGroupName = $map['DpiGroupName'];
        }
        if (isset($map['DpiGroupId'])) {
            $model->dpiGroupId = $map['DpiGroupId'];
        }
        if (isset($map['MinEngineVersion'])) {
            $model->minEngineVersion = $map['MinEngineVersion'];
        }

        return $model;
    }
}
