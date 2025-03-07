<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models\QueryContentResponseBody\matches;

use AlibabaCloud\SDK\Gpdb\V20160503\Models\QueryContentResponseBody\matches\matchList\vector;
use AlibabaCloud\Tea\Model;

class matchList extends Model
{
    /**
     * @description The content that is used for full-text search. If you leave this parameter empty, only vector search is used. If you do not leave this parameter empty, two-way retrieval based on vector search and full-text search is used.
     *
     * >  You must specify at least one of the Content and Vector parameters.
     * @example Cloud-native data warehouse AnalyticDB PostgreSQL Edition provides a simple, fast, and cost-effective PB-level cloud data warehouse solution.
     *
     * @var string
     */
    public $content;

    /**
     * @description The name of the document.
     *
     * >  You can call the [ListDocuments](https://help.aliyun.com/document_detail/2618453.html) operation to query a list of documents.
     * @example my_doc.txt
     *
     * @var string
     */
    public $fileName;

    /**
     * @description The public URL of the query result image, valid for 2 hours
     *
     * @example https://xxx-cn-beijing.aliyuncs.com/image/test.png
     *
     * @var string
     */
    public $fileURL;

    /**
     * @description The unique ID of the vector data.
     *
     * @example doca-1234
     *
     * @var string
     */
    public $id;

    /**
     * @description Metadata during document loader loading.
     *
     * @example {"page_pos": 1}
     *
     * @var string
     */
    public $loaderMetadata;

    /**
     * @description The metadata.
     *
     * @var string[]
     */
    public $metadata;

    /**
     * @description Re-ranking score.
     *
     * @example 6.2345
     *
     * @var float
     */
    public $rerankScore;

    /**
     * @description Source of the retrieval results:
     *
     * - 3 indicates dual-path recall
     * @example 1
     *
     * @var int
     */
    public $retrievalSource;

    /**
     * @description The similarity score of the data. It is related to the `l2, ip, or cosine` algorithm that is specified when you create an index.
     *
     * @example 0.12345
     *
     * @var float
     */
    public $score;

    /**
     * @description The vector data. The length of the value must be the same as that of the Dimension parameter in the [CreateCollection](https://help.aliyun.com/document_detail/2401497.html) operation.
     *
     * >  If you leave this parameter empty, only full-text search results are returned.
     * @var vector
     */
    public $vector;
    protected $_name = [
        'content'         => 'Content',
        'fileName'        => 'FileName',
        'fileURL'         => 'FileURL',
        'id'              => 'Id',
        'loaderMetadata'  => 'LoaderMetadata',
        'metadata'        => 'Metadata',
        'rerankScore'     => 'RerankScore',
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
        if (null !== $this->fileURL) {
            $res['FileURL'] = $this->fileURL;
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
        if (null !== $this->rerankScore) {
            $res['RerankScore'] = $this->rerankScore;
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
        if (isset($map['FileURL'])) {
            $model->fileURL = $map['FileURL'];
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
        if (isset($map['RerankScore'])) {
            $model->rerankScore = $map['RerankScore'];
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
