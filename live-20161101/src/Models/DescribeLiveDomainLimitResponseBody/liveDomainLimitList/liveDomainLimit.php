<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveDomainLimitResponseBody\liveDomainLimitList;

use AlibabaCloud\Tea\Model;

class liveDomainLimit extends Model
{
    /**
     * @var int
     */
    public $limitTranscodeNum;

    /**
     * @var int
     */
    public $limitNum;

    /**
     * @var string
     */
    public $domainName;
    protected $_name = [
        'limitTranscodeNum' => 'LimitTranscodeNum',
        'limitNum'          => 'LimitNum',
        'domainName'        => 'DomainName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->limitTranscodeNum) {
            $res['LimitTranscodeNum'] = $this->limitTranscodeNum;
        }
        if (null !== $this->limitNum) {
            $res['LimitNum'] = $this->limitNum;
        }
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
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
        if (isset($map['LimitTranscodeNum'])) {
            $model->limitTranscodeNum = $map['LimitTranscodeNum'];
        }
        if (isset($map['LimitNum'])) {
            $model->limitNum = $map['LimitNum'];
        }
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }

        return $model;
    }
}
