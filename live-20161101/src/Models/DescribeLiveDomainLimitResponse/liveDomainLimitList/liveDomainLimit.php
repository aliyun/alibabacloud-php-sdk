<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveDomainLimitResponse\liveDomainLimitList;

use AlibabaCloud\Tea\Model;

class liveDomainLimit extends Model
{
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
    protected $_name = [
        'domainName'        => 'DomainName',
        'limitNum'          => 'LimitNum',
        'limitTranscodeNum' => 'LimitTranscodeNum',
    ];

    public function validate()
    {
        Model::validateRequired('domainName', $this->domainName, true);
        Model::validateRequired('limitNum', $this->limitNum, true);
        Model::validateRequired('limitTranscodeNum', $this->limitTranscodeNum, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }
        if (null !== $this->limitNum) {
            $res['LimitNum'] = $this->limitNum;
        }
        if (null !== $this->limitTranscodeNum) {
            $res['LimitTranscodeNum'] = $this->limitTranscodeNum;
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
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }
        if (isset($map['LimitNum'])) {
            $model->limitNum = $map['LimitNum'];
        }
        if (isset($map['LimitTranscodeNum'])) {
            $model->limitTranscodeNum = $map['LimitTranscodeNum'];
        }

        return $model;
    }
}
