<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveDomainLimitResponseBody\liveDomainLimitList;

use AlibabaCloud\Tea\Model;

class liveDomainLimit extends Model
{
    /**
     * @description The current number of ingested streams.
     *
     * @example 10
     *
     * @var int
     */
    public $currentNum;

    /**
     * @description The current number of transcoded streams.
     *
     * @example 10
     *
     * @var int
     */
    public $currentTranscodeNum;

    /**
     * @description The current number of streams relayed from the live center.
     *
     * @example 10
     *
     * @var int
     */
    public $currentTransferNum;

    /**
     * @description The name of the queried main streaming domain.
     *
     * @example example.com
     *
     * @var string
     */
    public $domainName;

    /**
     * @description The maximum number of ingested streams.
     *
     * @example 100
     *
     * @var int
     */
    public $limitNum;

    /**
     * @description The maximum number of transcoded streams.
     *
     * @example 50
     *
     * @var int
     */
    public $limitTranscodeNum;

    /**
     * @description The maximum allowed number of streams relayed from the live center.
     *
     * @example 50
     *
     * @var int
     */
    public $limitTransferNum;
    protected $_name = [
        'currentNum' => 'CurrentNum',
        'currentTranscodeNum' => 'CurrentTranscodeNum',
        'currentTransferNum' => 'CurrentTransferNum',
        'domainName' => 'DomainName',
        'limitNum' => 'LimitNum',
        'limitTranscodeNum' => 'LimitTranscodeNum',
        'limitTransferNum' => 'LimitTransferNum',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->currentNum) {
            $res['CurrentNum'] = $this->currentNum;
        }
        if (null !== $this->currentTranscodeNum) {
            $res['CurrentTranscodeNum'] = $this->currentTranscodeNum;
        }
        if (null !== $this->currentTransferNum) {
            $res['CurrentTransferNum'] = $this->currentTransferNum;
        }
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }
        if (null !== $this->limitNum) {
            $res['LimitNum'] = $this->limitNum;
        }
        if (null !== $this->limitTranscodeNum) {
            $res['LimitTranscodeNum'] = $this->limitTranscodeNum;
        }
        if (null !== $this->limitTransferNum) {
            $res['LimitTransferNum'] = $this->limitTransferNum;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return liveDomainLimit
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CurrentNum'])) {
            $model->currentNum = $map['CurrentNum'];
        }
        if (isset($map['CurrentTranscodeNum'])) {
            $model->currentTranscodeNum = $map['CurrentTranscodeNum'];
        }
        if (isset($map['CurrentTransferNum'])) {
            $model->currentTransferNum = $map['CurrentTransferNum'];
        }
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }
        if (isset($map['LimitNum'])) {
            $model->limitNum = $map['LimitNum'];
        }
        if (isset($map['LimitTranscodeNum'])) {
            $model->limitTranscodeNum = $map['LimitTranscodeNum'];
        }
        if (isset($map['LimitTransferNum'])) {
            $model->limitTransferNum = $map['LimitTransferNum'];
        }

        return $model;
    }
}
