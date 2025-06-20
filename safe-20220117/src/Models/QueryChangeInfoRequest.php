<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Safe\V20220117\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Safe\V20220117\Models\QueryChangeInfoRequest\levelTree;

class QueryChangeInfoRequest extends Model
{
    /**
     * @var string
     */
    public $authKey;

    /**
     * @var string
     */
    public $authSign;

    /**
     * @var string[]
     */
    public $az;

    /**
     * @var string
     */
    public $bgVid;

    /**
     * @var string
     */
    public $buId;

    /**
     * @var string
     */
    public $changeSystem;

    /**
     * @var int
     */
    public $endTime;

    /**
     * @var string
     */
    public $keyword;

    /**
     * @var levelTree
     */
    public $levelTree;

    /**
     * @var int
     */
    public $limit;

    /**
     * @var int
     */
    public $page;

    /**
     * @var string[]
     */
    public $product;

    /**
     * @var string[]
     */
    public $region;

    /**
     * @var int
     */
    public $reqTimestamp;

    /**
     * @var string
     */
    public $source;

    /**
     * @var string
     */
    public $sourceOrderId;

    /**
     * @var int
     */
    public $startTime;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'authKey' => 'AuthKey',
        'authSign' => 'AuthSign',
        'az' => 'Az',
        'bgVid' => 'BgVid',
        'buId' => 'BuId',
        'changeSystem' => 'ChangeSystem',
        'endTime' => 'EndTime',
        'keyword' => 'Keyword',
        'levelTree' => 'LevelTree',
        'limit' => 'Limit',
        'page' => 'Page',
        'product' => 'Product',
        'region' => 'Region',
        'reqTimestamp' => 'ReqTimestamp',
        'source' => 'Source',
        'sourceOrderId' => 'SourceOrderId',
        'startTime' => 'StartTime',
        'type' => 'Type',
    ];

    public function validate()
    {
        if (\is_array($this->az)) {
            Model::validateArray($this->az);
        }
        if (null !== $this->levelTree) {
            $this->levelTree->validate();
        }
        if (\is_array($this->product)) {
            Model::validateArray($this->product);
        }
        if (\is_array($this->region)) {
            Model::validateArray($this->region);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->authKey) {
            $res['AuthKey'] = $this->authKey;
        }

        if (null !== $this->authSign) {
            $res['AuthSign'] = $this->authSign;
        }

        if (null !== $this->az) {
            if (\is_array($this->az)) {
                $res['Az'] = [];
                $n1 = 0;
                foreach ($this->az as $item1) {
                    $res['Az'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->bgVid) {
            $res['BgVid'] = $this->bgVid;
        }

        if (null !== $this->buId) {
            $res['BuId'] = $this->buId;
        }

        if (null !== $this->changeSystem) {
            $res['ChangeSystem'] = $this->changeSystem;
        }

        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }

        if (null !== $this->keyword) {
            $res['Keyword'] = $this->keyword;
        }

        if (null !== $this->levelTree) {
            $res['LevelTree'] = null !== $this->levelTree ? $this->levelTree->toArray($noStream) : $this->levelTree;
        }

        if (null !== $this->limit) {
            $res['Limit'] = $this->limit;
        }

        if (null !== $this->page) {
            $res['Page'] = $this->page;
        }

        if (null !== $this->product) {
            if (\is_array($this->product)) {
                $res['Product'] = [];
                $n1 = 0;
                foreach ($this->product as $item1) {
                    $res['Product'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->region) {
            if (\is_array($this->region)) {
                $res['Region'] = [];
                $n1 = 0;
                foreach ($this->region as $item1) {
                    $res['Region'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->reqTimestamp) {
            $res['ReqTimestamp'] = $this->reqTimestamp;
        }

        if (null !== $this->source) {
            $res['Source'] = $this->source;
        }

        if (null !== $this->sourceOrderId) {
            $res['SourceOrderId'] = $this->sourceOrderId;
        }

        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
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
        if (isset($map['AuthKey'])) {
            $model->authKey = $map['AuthKey'];
        }

        if (isset($map['AuthSign'])) {
            $model->authSign = $map['AuthSign'];
        }

        if (isset($map['Az'])) {
            if (!empty($map['Az'])) {
                $model->az = [];
                $n1 = 0;
                foreach ($map['Az'] as $item1) {
                    $model->az[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['BgVid'])) {
            $model->bgVid = $map['BgVid'];
        }

        if (isset($map['BuId'])) {
            $model->buId = $map['BuId'];
        }

        if (isset($map['ChangeSystem'])) {
            $model->changeSystem = $map['ChangeSystem'];
        }

        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }

        if (isset($map['Keyword'])) {
            $model->keyword = $map['Keyword'];
        }

        if (isset($map['LevelTree'])) {
            $model->levelTree = levelTree::fromMap($map['LevelTree']);
        }

        if (isset($map['Limit'])) {
            $model->limit = $map['Limit'];
        }

        if (isset($map['Page'])) {
            $model->page = $map['Page'];
        }

        if (isset($map['Product'])) {
            if (!empty($map['Product'])) {
                $model->product = [];
                $n1 = 0;
                foreach ($map['Product'] as $item1) {
                    $model->product[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Region'])) {
            if (!empty($map['Region'])) {
                $model->region = [];
                $n1 = 0;
                foreach ($map['Region'] as $item1) {
                    $model->region[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['ReqTimestamp'])) {
            $model->reqTimestamp = $map['ReqTimestamp'];
        }

        if (isset($map['Source'])) {
            $model->source = $map['Source'];
        }

        if (isset($map['SourceOrderId'])) {
            $model->sourceOrderId = $map['SourceOrderId'];
        }

        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
