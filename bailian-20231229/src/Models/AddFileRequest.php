<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Bailian\V20231229\Models;

use AlibabaCloud\Dara\Model;

class AddFileRequest extends Model
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
     * @var string[]
     */
    public $tags;
    protected $_name = [
        'categoryId' => 'CategoryId',
        'categoryType' => 'CategoryType',
        'leaseId' => 'LeaseId',
        'parser' => 'Parser',
        'tags' => 'Tags',
    ];

    public function validate()
    {
        if (\is_array($this->tags)) {
            Model::validateArray($this->tags);
        }
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

        if (null !== $this->tags) {
            if (\is_array($this->tags)) {
                $res['Tags'] = [];
                $n1 = 0;
                foreach ($this->tags as $item1) {
                    $res['Tags'][$n1++] = $item1;
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
            if (!empty($map['Tags'])) {
                $model->tags = [];
                $n1 = 0;
                foreach ($map['Tags'] as $item1) {
                    $model->tags[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
