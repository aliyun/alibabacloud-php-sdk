<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\QueryCallInTransferRecordResponseBody\data;

use AlibabaCloud\Tea\Model;

class values extends Model
{
    /**
     * @description The called number of the inbound call.
     *
     * @example 150****0000
     *
     * @var string
     */
    public $callInCalled;

    /**
     * @description The calling number of the inbound call.
     *
     * @example 150****0000
     *
     * @var string
     */
    public $callInCaller;

    /**
     * @description The time when the call was initiated.
     *
     * @example 2020-10-03 10:21:21
     *
     * @var int
     */
    public $gmtCreate;

    /**
     * @description The recording URL.
     *
     * @example http://alicom-fc-media.cn-hangzhou.oss.aliyun-inc.com/dayuBizVoiceMrg/4238c230-9e74-41be-90b8-2fbe7684****.wav?Expires=1627538265&OSSAccessKeyId=bypFNbGJVk73****&Signature=****mUqkPqIQ%3D
     *
     * @var string
     */
    public $recordUrl;

    /**
     * @description The phone number to which the call was transferred.
     *
     * @example 151****0000
     *
     * @var string
     */
    public $transferCalled;

    /**
     * @description The calling number that transferred the call.
     *
     * @example 151****0000
     *
     * @var string
     */
    public $transferCaller;
    protected $_name = [
        'callInCalled'   => 'CallInCalled',
        'callInCaller'   => 'CallInCaller',
        'gmtCreate'      => 'GmtCreate',
        'recordUrl'      => 'RecordUrl',
        'transferCalled' => 'TransferCalled',
        'transferCaller' => 'TransferCaller',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->callInCalled) {
            $res['CallInCalled'] = $this->callInCalled;
        }
        if (null !== $this->callInCaller) {
            $res['CallInCaller'] = $this->callInCaller;
        }
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->recordUrl) {
            $res['RecordUrl'] = $this->recordUrl;
        }
        if (null !== $this->transferCalled) {
            $res['TransferCalled'] = $this->transferCalled;
        }
        if (null !== $this->transferCaller) {
            $res['TransferCaller'] = $this->transferCaller;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return values
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CallInCalled'])) {
            $model->callInCalled = $map['CallInCalled'];
        }
        if (isset($map['CallInCaller'])) {
            $model->callInCaller = $map['CallInCaller'];
        }
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['RecordUrl'])) {
            $model->recordUrl = $map['RecordUrl'];
        }
        if (isset($map['TransferCalled'])) {
            $model->transferCalled = $map['TransferCalled'];
        }
        if (isset($map['TransferCaller'])) {
            $model->transferCaller = $map['TransferCaller'];
        }

        return $model;
    }
}
