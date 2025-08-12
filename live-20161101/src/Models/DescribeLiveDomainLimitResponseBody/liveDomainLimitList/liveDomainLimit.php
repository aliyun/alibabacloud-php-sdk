<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveDomainLimitResponseBody\liveDomainLimitList;

use AlibabaCloud\Dara\Model;

class liveDomainLimit extends Model
{
    /**
     * @var int
     */
    public $currentNum;

    /**
     * @var int
     */
    public $currentTranscodeNum;

    /**
     * @var int
     */
    public $currentTransferNum;

    /**
     * @var string
     */
    public $domainName;

    /**
     * @var int
     */
    public $limitNum;

    /**
     * @var int
     */
    public $limitTranscodeNum;

    /**
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

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
