<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribePluginSchemasResponseBody\pluginSchemas;

use AlibabaCloud\Tea\Model;

class pluginSchema extends Model
{
    /**
     * @var string
     */
    public $title;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $documentId;

    /**
     * @var bool
     */
    public $supportClassic;
    protected $_name = [
        'title'          => 'Title',
        'description'    => 'Description',
        'name'           => 'Name',
        'documentId'     => 'DocumentId',
        'supportClassic' => 'SupportClassic',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->title) {
            $res['Title'] = $this->title;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->documentId) {
            $res['DocumentId'] = $this->documentId;
        }
        if (null !== $this->supportClassic) {
            $res['SupportClassic'] = $this->supportClassic;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return pluginSchema
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['DocumentId'])) {
            $model->documentId = $map['DocumentId'];
        }
        if (isset($map['SupportClassic'])) {
            $model->supportClassic = $map['SupportClassic'];
        }

        return $model;
    }
}
