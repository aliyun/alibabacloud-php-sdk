<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\CreatePipelineNodeRequest\createPipelineNodeCommand;

use AlibabaCloud\Tea\Model;

class fileInfo extends Model
{
    /**
     * @example desc
     *
     * @var string
     */
    public $description;

    /**
     * @example test
     *
     * @var string
     */
    public $directory;

    /**
     * @description This parameter is required.
     *
     * @example test_pipeline
     *
     * @var string
     */
    public $fileName;
    protected $_name = [
        'description' => 'Description',
        'directory' => 'Directory',
        'fileName' => 'FileName',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->directory) {
            $res['Directory'] = $this->directory;
        }
        if (null !== $this->fileName) {
            $res['FileName'] = $this->fileName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return fileInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Directory'])) {
            $model->directory = $map['Directory'];
        }
        if (isset($map['FileName'])) {
            $model->fileName = $map['FileName'];
        }

        return $model;
    }
}
