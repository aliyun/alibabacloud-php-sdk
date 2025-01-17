<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeSecureSuggestionResponseBody\suggestions;

use AlibabaCloud\Dara\Model;

class detail extends Model
{
    /**
     * @var string
     */
    public $description;
    /**
     * @var string
     */
    public $subType;
    /**
     * @var string
     */
    public $title;
    protected $_name = [
        'description' => 'Description',
        'subType'     => 'SubType',
        'title'       => 'Title',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->subType) {
            $res['SubType'] = $this->subType;
        }

        if (null !== $this->title) {
            $res['Title'] = $this->title;
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
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['SubType'])) {
            $model->subType = $map['SubType'];
        }

        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }

        return $model;
    }
}
