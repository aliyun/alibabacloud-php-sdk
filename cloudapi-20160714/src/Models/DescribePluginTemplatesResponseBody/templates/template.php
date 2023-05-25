<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribePluginTemplatesResponseBody\templates;

use AlibabaCloud\Tea\Model;

class template extends Model
{
    /**
     * @example balabala
     *
     * @var string
     */
    public $description;

    /**
     * @example anchor
     *
     * @var string
     */
    public $documentAnchor;

    /**
     * @example 41079
     *
     * @var string
     */
    public $documentId;

    /**
     * @example 1
     *
     * @var string
     */
    public $sample;

    /**
     * @example template title
     *
     * @var string
     */
    public $title;
    protected $_name = [
        'description'    => 'Description',
        'documentAnchor' => 'DocumentAnchor',
        'documentId'     => 'DocumentId',
        'sample'         => 'Sample',
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
        if (null !== $this->documentAnchor) {
            $res['DocumentAnchor'] = $this->documentAnchor;
        }
        if (null !== $this->documentId) {
            $res['DocumentId'] = $this->documentId;
        }
        if (null !== $this->sample) {
            $res['Sample'] = $this->sample;
        }
        if (null !== $this->title) {
            $res['Title'] = $this->title;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return template
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['DocumentAnchor'])) {
            $model->documentAnchor = $map['DocumentAnchor'];
        }
        if (isset($map['DocumentId'])) {
            $model->documentId = $map['DocumentId'];
        }
        if (isset($map['Sample'])) {
            $model->sample = $map['Sample'];
        }
        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }

        return $model;
    }
}
