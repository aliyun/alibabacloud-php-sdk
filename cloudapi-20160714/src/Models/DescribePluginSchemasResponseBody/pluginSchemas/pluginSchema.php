<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribePluginSchemasResponseBody\pluginSchemas;

use AlibabaCloud\Dara\Model;

class pluginSchema extends Model
{
    /**
     * @var string
     */
    public $description;
    /**
     * @var string
     */
    public $documentId;
    /**
     * @var string
     */
    public $name;
    /**
     * @var bool
     */
    public $supportClassic;
    /**
     * @var string
     */
    public $title;
    protected $_name = [
        'description'    => 'Description',
        'documentId'     => 'DocumentId',
        'name'           => 'Name',
        'supportClassic' => 'SupportClassic',
        'title'          => 'Title',
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

        if (null !== $this->documentId) {
            $res['DocumentId'] = $this->documentId;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->supportClassic) {
            $res['SupportClassic'] = $this->supportClassic;
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

        if (isset($map['DocumentId'])) {
            $model->documentId = $map['DocumentId'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['SupportClassic'])) {
            $model->supportClassic = $map['SupportClassic'];
        }

        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }

        return $model;
    }
}
