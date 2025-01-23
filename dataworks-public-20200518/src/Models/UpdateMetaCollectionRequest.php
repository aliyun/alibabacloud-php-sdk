<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Dara\Model;

class UpdateMetaCollectionRequest extends Model
{
    /**
     * @var string
     */
    public $comment;
    /**
     * @var string
     */
    public $name;
    /**
     * @var string
     */
    public $qualifiedName;
    protected $_name = [
        'comment'       => 'Comment',
        'name'          => 'Name',
        'qualifiedName' => 'QualifiedName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->comment) {
            $res['Comment'] = $this->comment;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->qualifiedName) {
            $res['QualifiedName'] = $this->qualifiedName;
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
        if (isset($map['Comment'])) {
            $model->comment = $map['Comment'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['QualifiedName'])) {
            $model->qualifiedName = $map['QualifiedName'];
        }

        return $model;
    }
}
