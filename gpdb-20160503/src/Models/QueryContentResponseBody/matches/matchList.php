<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models\QueryContentResponseBody\matches;

use AlibabaCloud\SDK\Gpdb\V20160503\Models\QueryContentResponseBody\matches\matchList\vector;
use AlibabaCloud\Tea\Model;

class matchList extends Model
{
    /**
     * @var string
     */
    public $content;

    /**
     * @example my_doc.txt
     *
     * @var string
     */
    public $fileName;

    /**
     * @example doca-1234
     *
     * @var string
     */
    public $id;

    /**
     * @example {"page_pos": 1}
     *
     * @var string
     */
    public $loaderMetadata;

    /**
     * @var string[]
     */
    public $metadata;

    /**
     * @example 1
     *
     * @var int
     */
    public $retrievalSource;

    /**
     * @example 0.12345
     *
     * @var float
     */
    public $score;

    /**
     * @var vector
     */
    public $vector;
    protected $_name = [
        'content'         => 'Content',
        'fileName'        => 'FileName',
        'id'              => 'Id',
        'loaderMetadata'  => 'LoaderMetadata',
        'metadata'        => 'Metadata',
        'retrievalSource' => 'RetrievalSource',
        'score'           => 'Score',
        'vector'          => 'Vector',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }
        if (null !== $this->fileName) {
            $res['FileName'] = $this->fileName;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->loaderMetadata) {
            $res['LoaderMetadata'] = $this->loaderMetadata;
        }
        if (null !== $this->metadata) {
            $res['Metadata'] = $this->metadata;
        }
        if (null !== $this->retrievalSource) {
            $res['RetrievalSource'] = $this->retrievalSource;
        }
        if (null !== $this->score) {
            $res['Score'] = $this->score;
        }
        if (null !== $this->vector) {
            $res['Vector'] = null !== $this->vector ? $this->vector->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return matchList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }
        if (isset($map['FileName'])) {
            $model->fileName = $map['FileName'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['LoaderMetadata'])) {
            $model->loaderMetadata = $map['LoaderMetadata'];
        }
        if (isset($map['Metadata'])) {
            $model->metadata = $map['Metadata'];
        }
        if (isset($map['RetrievalSource'])) {
            $model->retrievalSource = $map['RetrievalSource'];
        }
        if (isset($map['Score'])) {
            $model->score = $map['Score'];
        }
        if (isset($map['Vector'])) {
            $model->vector = vector::fromMap($map['Vector']);
        }

        return $model;
    }
}
