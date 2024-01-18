<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsiem\V20220616\Models;

use AlibabaCloud\Tea\Model;

class AddUserSourceLogConfigRequest extends Model
{
    /**
     * @description Specifies whether to add logs or delete added logs. Valid values:
     *
     *   \-1: deletes added logs.
     *   0: adds logs.
     *
     * @example 0
     *
     * @var int
     */
    public $deleted;

    /**
     * @description The display details of the Logstore.
     *
     * @example cn-shanghai.siem-project.siem-logstore
     *
     * @var string
     */
    public $disPlayLine;

    /**
     * @description The region in which the data management center of the threat analysis feature resides. Specify this parameter based on the regions in which your assets reside. Valid values:
     *
     *   cn-hangzhou: Your assets reside in regions in China.
     *   ap-southeast-1: Your assets reside in regions outside China.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The log code.
     *
     * @example cloud_siem_aegis_proc
     *
     * @var string
     */
    public $sourceLogCode;

    /**
     * @description The details of the Logstore that you want to use in the JSON string format.
     *
     * @example {"project":"wafnew-project-1335759343513432-cn-hangzhou","logStore":"wafnew-logstore","regionCode":"cn-hangzhou","prodCode":"waf"}
     *
     * @var string
     */
    public $sourceLogInfo;

    /**
     * @description The code of the cloud service.
     *
     * @example sas
     *
     * @var string
     */
    public $sourceProdCode;

    /**
     * @description The ID of the Alibaba Cloud account.
     *
     * @example 123XXXXXX
     *
     * @var int
     */
    public $subUserId;
    protected $_name = [
        'deleted'        => 'Deleted',
        'disPlayLine'    => 'DisPlayLine',
        'regionId'       => 'RegionId',
        'sourceLogCode'  => 'SourceLogCode',
        'sourceLogInfo'  => 'SourceLogInfo',
        'sourceProdCode' => 'SourceProdCode',
        'subUserId'      => 'SubUserId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->deleted) {
            $res['Deleted'] = $this->deleted;
        }
        if (null !== $this->disPlayLine) {
            $res['DisPlayLine'] = $this->disPlayLine;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->sourceLogCode) {
            $res['SourceLogCode'] = $this->sourceLogCode;
        }
        if (null !== $this->sourceLogInfo) {
            $res['SourceLogInfo'] = $this->sourceLogInfo;
        }
        if (null !== $this->sourceProdCode) {
            $res['SourceProdCode'] = $this->sourceProdCode;
        }
        if (null !== $this->subUserId) {
            $res['SubUserId'] = $this->subUserId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AddUserSourceLogConfigRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Deleted'])) {
            $model->deleted = $map['Deleted'];
        }
        if (isset($map['DisPlayLine'])) {
            $model->disPlayLine = $map['DisPlayLine'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['SourceLogCode'])) {
            $model->sourceLogCode = $map['SourceLogCode'];
        }
        if (isset($map['SourceLogInfo'])) {
            $model->sourceLogInfo = $map['SourceLogInfo'];
        }
        if (isset($map['SourceProdCode'])) {
            $model->sourceProdCode = $map['SourceProdCode'];
        }
        if (isset($map['SubUserId'])) {
            $model->subUserId = $map['SubUserId'];
        }

        return $model;
    }
}
