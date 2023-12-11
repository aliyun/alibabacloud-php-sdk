<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsiem\V20220616\Models;

use AlibabaCloud\Tea\Model;

class AddUserSourceLogConfigRequest extends Model
{
    /**
     * @example 0
     *
     * @var int
     */
    public $deleted;

    /**
     * @example cn-shanghai.siem-project.siem-logstore
     *
     * @var string
     */
    public $disPlayLine;

    /**
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @example cloud_siem_aegis_proc
     *
     * @var string
     */
    public $sourceLogCode;

    /**
     * @example {"project":"wafnew-project-1335759343513432-cn-hangzhou","logStore":"wafnew-logstore","regionCode":"cn-hangzhou","prodCode":"waf"}
     *
     * @var string
     */
    public $sourceLogInfo;

    /**
     * @example sas
     *
     * @var string
     */
    public $sourceProdCode;

    /**
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
