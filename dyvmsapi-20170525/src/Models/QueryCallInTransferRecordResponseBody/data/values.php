<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\QueryCallInTransferRecordResponseBody\data;

use AlibabaCloud\Tea\Model;

class values extends Model
{
    /**
     * @var string
     */
    public $callInCalled;

    /**
     * @var string
     */
    public $callInCaller;

    /**
     * @var int
     */
    public $gmtCreate;

    /**
     * @var string
     */
    public $recordUrl;

    /**
     * @var string
     */
    public $transferCalled;

    /**
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
