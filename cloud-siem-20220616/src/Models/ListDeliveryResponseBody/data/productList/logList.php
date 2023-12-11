<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsiem\V20220616\Models\ListDeliveryResponseBody\data\productList;

use AlibabaCloud\SDK\Cloudsiem\V20220616\Models\ListDeliveryResponseBody\data\productList\logList\extraParameters;
use AlibabaCloud\Tea\Model;

class logList extends Model
{
    /**
     * @description Indicates whether the log delivery feature can be enabled or disabled. The feature can be enabled or disabled only by the administrator of the threat analysis feature. Valid values:
     *
     *   true
     *   false
     *
     * @example true
     *
     * @var bool
     */
    public $canOperateOrNot;

    /**
     * @description The extended parameter.
     *
     * @var extraParameters[]
     */
    public $extraParameters;

    /**
     * @description The code of the log.
     *
     * @example cloud_siem_config_log
     *
     * @var string
     */
    public $logCode;

    /**
     * @description This parameter is deprecated.
     *
     * @example audit log
     *
     * @var string
     */
    public $logName;

    /**
     * @description This parameter is deprecated.
     *
     * @example audit log
     *
     * @var string
     */
    public $logNameEn;

    /**
     * @description The language code of the log that is used to indicate the language in which the log is displayed.
     *
     * @example ${sas.cloudsiem.prod.cloud_siem_aegis_crack_from_beaver}
     *
     * @var string
     */
    public $logNameKey;

    /**
     * @description The status of the log delivery. Valid values:
     *
     *   true: The logs are being delivered.
     *   false: The log delivery feature is disabled.
     *
     * @example true
     *
     * @var bool
     */
    public $status;

    /**
     * @description The topic of the log in the Logstore. The value is an index field in the Logstore that can be used to distinguish different logs.
     *
     * @example sas_login_event
     *
     * @var string
     */
    public $topic;
    protected $_name = [
        'canOperateOrNot' => 'CanOperateOrNot',
        'extraParameters' => 'ExtraParameters',
        'logCode'         => 'LogCode',
        'logName'         => 'LogName',
        'logNameEn'       => 'LogNameEn',
        'logNameKey'      => 'LogNameKey',
        'status'          => 'Status',
        'topic'           => 'Topic',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->canOperateOrNot) {
            $res['CanOperateOrNot'] = $this->canOperateOrNot;
        }
        if (null !== $this->extraParameters) {
            $res['ExtraParameters'] = [];
            if (null !== $this->extraParameters && \is_array($this->extraParameters)) {
                $n = 0;
                foreach ($this->extraParameters as $item) {
                    $res['ExtraParameters'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->logCode) {
            $res['LogCode'] = $this->logCode;
        }
        if (null !== $this->logName) {
            $res['LogName'] = $this->logName;
        }
        if (null !== $this->logNameEn) {
            $res['LogNameEn'] = $this->logNameEn;
        }
        if (null !== $this->logNameKey) {
            $res['LogNameKey'] = $this->logNameKey;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->topic) {
            $res['Topic'] = $this->topic;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return logList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CanOperateOrNot'])) {
            $model->canOperateOrNot = $map['CanOperateOrNot'];
        }
        if (isset($map['ExtraParameters'])) {
            if (!empty($map['ExtraParameters'])) {
                $model->extraParameters = [];
                $n                      = 0;
                foreach ($map['ExtraParameters'] as $item) {
                    $model->extraParameters[$n++] = null !== $item ? extraParameters::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['LogCode'])) {
            $model->logCode = $map['LogCode'];
        }
        if (isset($map['LogName'])) {
            $model->logName = $map['LogName'];
        }
        if (isset($map['LogNameEn'])) {
            $model->logNameEn = $map['LogNameEn'];
        }
        if (isset($map['LogNameKey'])) {
            $model->logNameKey = $map['LogNameKey'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Topic'])) {
            $model->topic = $map['Topic'];
        }

        return $model;
    }
}
