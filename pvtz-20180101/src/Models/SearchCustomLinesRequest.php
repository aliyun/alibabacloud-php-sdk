<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pvtz\V20180101\Models;

use AlibabaCloud\Dara\Model;

class SearchCustomLinesRequest extends Model
{
    /**
     * @var int
     */
    public $createTimestampEnd;

    /**
     * @var int
     */
    public $createTimestampStart;

    /**
     * @var string[]
     */
    public $creator;

    /**
     * @var string
     */
    public $ipv4;

    /**
     * @var string
     */
    public $lang;

    /**
     * @var string
     */
    public $name;

    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var int
     */
    public $updateTimestampEnd;

    /**
     * @var int
     */
    public $updateTimestampStart;
    protected $_name = [
        'createTimestampEnd' => 'CreateTimestampEnd',
        'createTimestampStart' => 'CreateTimestampStart',
        'creator' => 'Creator',
        'ipv4' => 'Ipv4',
        'lang' => 'Lang',
        'name' => 'Name',
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'updateTimestampEnd' => 'UpdateTimestampEnd',
        'updateTimestampStart' => 'UpdateTimestampStart',
    ];

    public function validate()
    {
        if (\is_array($this->creator)) {
            Model::validateArray($this->creator);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->createTimestampEnd) {
            $res['CreateTimestampEnd'] = $this->createTimestampEnd;
        }

        if (null !== $this->createTimestampStart) {
            $res['CreateTimestampStart'] = $this->createTimestampStart;
        }

        if (null !== $this->creator) {
            if (\is_array($this->creator)) {
                $res['Creator'] = [];
                $n1 = 0;
                foreach ($this->creator as $item1) {
                    $res['Creator'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->ipv4) {
            $res['Ipv4'] = $this->ipv4;
        }

        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->updateTimestampEnd) {
            $res['UpdateTimestampEnd'] = $this->updateTimestampEnd;
        }

        if (null !== $this->updateTimestampStart) {
            $res['UpdateTimestampStart'] = $this->updateTimestampStart;
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
        if (isset($map['CreateTimestampEnd'])) {
            $model->createTimestampEnd = $map['CreateTimestampEnd'];
        }

        if (isset($map['CreateTimestampStart'])) {
            $model->createTimestampStart = $map['CreateTimestampStart'];
        }

        if (isset($map['Creator'])) {
            if (!empty($map['Creator'])) {
                $model->creator = [];
                $n1 = 0;
                foreach ($map['Creator'] as $item1) {
                    $model->creator[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Ipv4'])) {
            $model->ipv4 = $map['Ipv4'];
        }

        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['UpdateTimestampEnd'])) {
            $model->updateTimestampEnd = $map['UpdateTimestampEnd'];
        }

        if (isset($map['UpdateTimestampStart'])) {
            $model->updateTimestampStart = $map['UpdateTimestampStart'];
        }

        return $model;
    }
}
