<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribePluginSchemasResponseBody\pluginSchemas;

use AlibabaCloud\Tea\Model;

class pluginSchema extends Model
{
    /**
     * @description The plug-in description.
     *
     * @example plugin scheme description
     *
     * @var string
     */
    public $description;

    /**
     * @description The ID of the document.
     *
     * @example 4107**
     *
     * @var string
     */
    public $documentId;

    /**
     * @description The name of the plug-in.
     *
     * @example VPC_C
     *
     * @var string
     */
    public $name;

    /**
     * @description Indicates whether classification is supported.
     *
     * @example true
     *
     * @var bool
     */
    public $supportClassic;

    /**
     * @description The plug-in title.
     *
     * @example plugin schema title
     *
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
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return pluginSchema
     */
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
