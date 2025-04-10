<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Bailian\V20231229\Models;

use AlibabaCloud\Dara\Model;

class AddFileShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $categoryId;

    /**
     * @var string
     */
    public $categoryType;

    /**
     * @var string
     */
    public $leaseId;

    /**
     * @var string
     */
    public $parser;

    /**
     * @var string
     */
    public $tagsShrink;
    protected $_name = [
        'categoryId' => 'CategoryId',
        'categoryType' => 'CategoryType',
        'leaseId' => 'LeaseId',
        'parser' => 'Parser',
        'tagsShrink' => 'Tags',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->categoryId) {
            $res['CategoryId'] = $this->categoryId;
        }

        if (null !== $this->categoryType) {
            $res['CategoryType'] = $this->categoryType;
        }

        if (null !== $this->leaseId) {
            $res['LeaseId'] = $this->leaseId;
        }

        if (null !== $this->parser) {
            $res['Parser'] = $this->parser;
        }

        if (null !== $this->tagsShrink) {
            $res['Tags'] = $this->tagsShrink;
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
        if (isset($map['CategoryId'])) {
            $model->categoryId = $map['CategoryId'];
        }

        if (isset($map['CategoryType'])) {
            $model->categoryType = $map['CategoryType'];
        }

        if (isset($map['LeaseId'])) {
            $model->leaseId = $map['LeaseId'];
        }

        if (isset($map['Parser'])) {
            $model->parser = $map['Parser'];
        }

        if (isset($map['Tags'])) {
            $model->tagsShrink = $map['Tags'];
        }

        return $model;
    }
}
