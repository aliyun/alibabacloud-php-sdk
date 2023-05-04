<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeDomainTopClientIpVisitResponseBody;

use AlibabaCloud\Tea\Model;

class clientIpList extends Model
{
    /**
     * @description The statistical analysis feature of Alibaba Cloud CDN is no longer available. The API operations related to the statistical analysis feature are no longer maintained. We recommend that you do not use the API operations because data may be missing or inaccurate. You can use the [operations report](https://www.alibabacloud.com/help/en/alibaba-cloud-cdn/latest/customize-an-operations-report-template-and-create-a-tracking-task) feature to for data analysis.
     *
     * - You can call this operation up to 10 times per second per account.
     * @example 256
     *
     * @var int
     */
    public $acc;

    /**
     * @description The total amount of network traffic consumed. Unit: bytes.
     *
     * @example 1.1.xxx
     *
     * @var string
     */
    public $clientIp;

    /**
     * @description The total number of requests.
     *
     * @example 2
     *
     * @var int
     */
    public $rank;

    /**
     * @description The total number of requests.
     *
     * @example 1024
     *
     * @var int
     */
    public $traffic;
    protected $_name = [
        'acc'      => 'Acc',
        'clientIp' => 'ClientIp',
        'rank'     => 'Rank',
        'traffic'  => 'Traffic',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->acc) {
            $res['Acc'] = $this->acc;
        }
        if (null !== $this->clientIp) {
            $res['ClientIp'] = $this->clientIp;
        }
        if (null !== $this->rank) {
            $res['Rank'] = $this->rank;
        }
        if (null !== $this->traffic) {
            $res['Traffic'] = $this->traffic;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return clientIpList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Acc'])) {
            $model->acc = $map['Acc'];
        }
        if (isset($map['ClientIp'])) {
            $model->clientIp = $map['ClientIp'];
        }
        if (isset($map['Rank'])) {
            $model->rank = $map['Rank'];
        }
        if (isset($map['Traffic'])) {
            $model->traffic = $map['Traffic'];
        }

        return $model;
    }
}
