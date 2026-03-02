<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Neuron\V20211115\Models;

use AlibabaCloud\Dara\Model;

class ListPdpPbcsRequest extends Model
{
    /**
     * @var int
     */
    public $companyId;

    /**
     * @var string
     */
    public $developerId;

    /**
     * @var string
     */
    public $keyword;

    /**
     * @var string
     */
    public $orderBy;

    /**
     * @var string
     */
    public $orderDirection;

    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var int[]
     */
    public $pbcIds;
    protected $_name = [
        'companyId' => 'companyId',
        'developerId' => 'developerId',
        'keyword' => 'keyword',
        'orderBy' => 'orderBy',
        'orderDirection' => 'orderDirection',
        'pageNumber' => 'pageNumber',
        'pageSize' => 'pageSize',
        'pbcIds' => 'pbcIds',
    ];

    public function validate()
    {
        if (\is_array($this->pbcIds)) {
            Model::validateArray($this->pbcIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->companyId) {
            $res['companyId'] = $this->companyId;
        }

        if (null !== $this->developerId) {
            $res['developerId'] = $this->developerId;
        }

        if (null !== $this->keyword) {
            $res['keyword'] = $this->keyword;
        }

        if (null !== $this->orderBy) {
            $res['orderBy'] = $this->orderBy;
        }

        if (null !== $this->orderDirection) {
            $res['orderDirection'] = $this->orderDirection;
        }

        if (null !== $this->pageNumber) {
            $res['pageNumber'] = $this->pageNumber;
        }

        if (null !== $this->pageSize) {
            $res['pageSize'] = $this->pageSize;
        }

        if (null !== $this->pbcIds) {
            if (\is_array($this->pbcIds)) {
                $res['pbcIds'] = [];
                $n1 = 0;
                foreach ($this->pbcIds as $item1) {
                    $res['pbcIds'][$n1] = $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['companyId'])) {
            $model->companyId = $map['companyId'];
        }

        if (isset($map['developerId'])) {
            $model->developerId = $map['developerId'];
        }

        if (isset($map['keyword'])) {
            $model->keyword = $map['keyword'];
        }

        if (isset($map['orderBy'])) {
            $model->orderBy = $map['orderBy'];
        }

        if (isset($map['orderDirection'])) {
            $model->orderDirection = $map['orderDirection'];
        }

        if (isset($map['pageNumber'])) {
            $model->pageNumber = $map['pageNumber'];
        }

        if (isset($map['pageSize'])) {
            $model->pageSize = $map['pageSize'];
        }

        if (isset($map['pbcIds'])) {
            if (!empty($map['pbcIds'])) {
                $model->pbcIds = [];
                $n1 = 0;
                foreach ($map['pbcIds'] as $item1) {
                    $model->pbcIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
