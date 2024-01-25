<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiops\V20200806\Models\ListReportsResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $bid;

    /**
     * @var int
     */
    public $cid;

    /**
     * @var int
     */
    public $costCount;

    /**
     * @var string
     */
    public $costCountTrendJson;

    /**
     * @var int
     */
    public $criticalCount;

    /**
     * @var string
     */
    public $criticalCountTrendJson;

    /**
     * @var string
     */
    public $customerName;

    /**
     * @var string
     */
    public $gcLevel;

    /**
     * @var int
     */
    public $gmtCreate;

    /**
     * @var int
     */
    public $gmtModified;

    /**
     * @var int
     */
    public $id;

    /**
     * @var int
     */
    public $normalCount;

    /**
     * @var string
     */
    public $normalCountTrendJson;

    /**
     * @var int
     */
    public $score;

    /**
     * @var string
     */
    public $scoreTrendJson;

    /**
     * @var string
     */
    public $trendJson;

    /**
     * @var int
     */
    public $uid;

    /**
     * @var int
     */
    public $warningCount;

    /**
     * @var string
     */
    public $warningCountTrendJson;
    protected $_name = [
        'bid'                    => 'bid',
        'cid'                    => 'cid',
        'costCount'              => 'costCount',
        'costCountTrendJson'     => 'costCountTrendJson',
        'criticalCount'          => 'criticalCount',
        'criticalCountTrendJson' => 'criticalCountTrendJson',
        'customerName'           => 'customerName',
        'gcLevel'                => 'gcLevel',
        'gmtCreate'              => 'gmtCreate',
        'gmtModified'            => 'gmtModified',
        'id'                     => 'id',
        'normalCount'            => 'normalCount',
        'normalCountTrendJson'   => 'normalCountTrendJson',
        'score'                  => 'score',
        'scoreTrendJson'         => 'scoreTrendJson',
        'trendJson'              => 'trendJson',
        'uid'                    => 'uid',
        'warningCount'           => 'warningCount',
        'warningCountTrendJson'  => 'warningCountTrendJson',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bid) {
            $res['bid'] = $this->bid;
        }
        if (null !== $this->cid) {
            $res['cid'] = $this->cid;
        }
        if (null !== $this->costCount) {
            $res['costCount'] = $this->costCount;
        }
        if (null !== $this->costCountTrendJson) {
            $res['costCountTrendJson'] = $this->costCountTrendJson;
        }
        if (null !== $this->criticalCount) {
            $res['criticalCount'] = $this->criticalCount;
        }
        if (null !== $this->criticalCountTrendJson) {
            $res['criticalCountTrendJson'] = $this->criticalCountTrendJson;
        }
        if (null !== $this->customerName) {
            $res['customerName'] = $this->customerName;
        }
        if (null !== $this->gcLevel) {
            $res['gcLevel'] = $this->gcLevel;
        }
        if (null !== $this->gmtCreate) {
            $res['gmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->gmtModified) {
            $res['gmtModified'] = $this->gmtModified;
        }
        if (null !== $this->id) {
            $res['id'] = $this->id;
        }
        if (null !== $this->normalCount) {
            $res['normalCount'] = $this->normalCount;
        }
        if (null !== $this->normalCountTrendJson) {
            $res['normalCountTrendJson'] = $this->normalCountTrendJson;
        }
        if (null !== $this->score) {
            $res['score'] = $this->score;
        }
        if (null !== $this->scoreTrendJson) {
            $res['scoreTrendJson'] = $this->scoreTrendJson;
        }
        if (null !== $this->trendJson) {
            $res['trendJson'] = $this->trendJson;
        }
        if (null !== $this->uid) {
            $res['uid'] = $this->uid;
        }
        if (null !== $this->warningCount) {
            $res['warningCount'] = $this->warningCount;
        }
        if (null !== $this->warningCountTrendJson) {
            $res['warningCountTrendJson'] = $this->warningCountTrendJson;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['bid'])) {
            $model->bid = $map['bid'];
        }
        if (isset($map['cid'])) {
            $model->cid = $map['cid'];
        }
        if (isset($map['costCount'])) {
            $model->costCount = $map['costCount'];
        }
        if (isset($map['costCountTrendJson'])) {
            $model->costCountTrendJson = $map['costCountTrendJson'];
        }
        if (isset($map['criticalCount'])) {
            $model->criticalCount = $map['criticalCount'];
        }
        if (isset($map['criticalCountTrendJson'])) {
            $model->criticalCountTrendJson = $map['criticalCountTrendJson'];
        }
        if (isset($map['customerName'])) {
            $model->customerName = $map['customerName'];
        }
        if (isset($map['gcLevel'])) {
            $model->gcLevel = $map['gcLevel'];
        }
        if (isset($map['gmtCreate'])) {
            $model->gmtCreate = $map['gmtCreate'];
        }
        if (isset($map['gmtModified'])) {
            $model->gmtModified = $map['gmtModified'];
        }
        if (isset($map['id'])) {
            $model->id = $map['id'];
        }
        if (isset($map['normalCount'])) {
            $model->normalCount = $map['normalCount'];
        }
        if (isset($map['normalCountTrendJson'])) {
            $model->normalCountTrendJson = $map['normalCountTrendJson'];
        }
        if (isset($map['score'])) {
            $model->score = $map['score'];
        }
        if (isset($map['scoreTrendJson'])) {
            $model->scoreTrendJson = $map['scoreTrendJson'];
        }
        if (isset($map['trendJson'])) {
            $model->trendJson = $map['trendJson'];
        }
        if (isset($map['uid'])) {
            $model->uid = $map['uid'];
        }
        if (isset($map['warningCount'])) {
            $model->warningCount = $map['warningCount'];
        }
        if (isset($map['warningCountTrendJson'])) {
            $model->warningCountTrendJson = $map['warningCountTrendJson'];
        }

        return $model;
    }
}
