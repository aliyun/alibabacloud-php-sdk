<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribePluginTemplatesResponseBody\templates;

use AlibabaCloud\Tea\Model;

class template extends Model
{
    /**
     * @var string
     */
    public $title;

    /**
     * @var string
     */
    public $documentAnchor;

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
    public $sample;
    protected $_name = [
        'title'          => 'Title',
        'documentAnchor' => 'DocumentAnchor',
        'description'    => 'Description',
        'documentId'     => 'DocumentId',
        'sample'         => 'Sample',
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
        if (null !== $this->documentAnchor) {
            $res['DocumentAnchor'] = $this->documentAnchor;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->documentId) {
            $res['DocumentId'] = $this->documentId;
        }
        if (null !== $this->sample) {
            $res['Sample'] = $this->sample;
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
        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }
        if (isset($map['DocumentAnchor'])) {
            $model->documentAnchor = $map['DocumentAnchor'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['DocumentId'])) {
            $model->documentId = $map['DocumentId'];
        }
        if (isset($map['Sample'])) {
            $model->sample = $map['Sample'];
        }

        return $model;
    }
}
