<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudauth\V20190307\Models;

use AlibabaCloud\Tea\Model;

class DeleteWhitelistSettingRequest extends Model
{
    /**
     * @var string
     */
    public $ids;

    /**
     * @var string
     */
    public $lang;

    /**
     * @var string
     */
    public $serviceCode;

    /**
     * @var string
     */
    public $sourceIp;
    protected $_name = [
        'ids'         => 'Ids',
        'lang'        => 'Lang',
        'serviceCode' => 'ServiceCode',
        'sourceIp'    => 'SourceIp',
    ];

    public function validate()
    {
        Model::validateRequired('ids', $this->ids, true);
        Model::validateRequired('serviceCode', $this->serviceCode, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ids) {
            $res['Ids'] = $this->ids;
        }
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->serviceCode) {
            $res['ServiceCode'] = $this->serviceCode;
        }
        if (null !== $this->sourceIp) {
            $res['SourceIp'] = $this->sourceIp;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteWhitelistSettingRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Ids'])) {
            $model->ids = $map['Ids'];
        }
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['ServiceCode'])) {
            $model->serviceCode = $map['ServiceCode'];
        }
        if (isset($map['SourceIp'])) {
            $model->sourceIp = $map['SourceIp'];
        }

        return $model;
    }
}
