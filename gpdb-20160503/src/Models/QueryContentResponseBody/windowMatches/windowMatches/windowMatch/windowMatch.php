<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models\QueryContentResponseBody\windowMatches\windowMatches\windowMatch;

use AlibabaCloud\Tea\Model;

class windowMatch extends Model
{
    /**
     * @description Text content.
     *
     * @example AnalyticDB for PostgreSQL is a cloud-native data warehouse service that provides large-scale parallel processing (MPP) capabilities for massive online data analysis.
     *
     * @var string
     */
    public $content;

    /**
     * @description File name.
     *
     * @example my_doc.txt
     *
     * @var string
     */
    public $fileName;

    /**
     * @description Unique ID of the vector data.
     *
     * @example doca-2345
     *
     * @var string
     */
    public $id;

    /**
     * @description Metadata information when the document loader was loaded.
     *
     * @example {"page_pos": 2}
     *
     * @var string
     */
    public $loaderMetadata;

    /**
     * @description Metadata map.
     *
     * @var string[]
     */
    public $metadata;
    protected $_name = [
        'content'        => 'Content',
        'fileName'       => 'FileName',
        'id'             => 'Id',
        'loaderMetadata' => 'LoaderMetadata',
        'metadata'       => 'Metadata',
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return windowMatch
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

        return $model;
    }
}
