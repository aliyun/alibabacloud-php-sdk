<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EasyGene\V20210315\Models;

use AlibabaCloud\Tea\Model;

class ImportAppRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example fastp
     *
     * @var string
     */
    public $appName;

    /**
     * @description This parameter is required.
     *
     * @example easygene:opengene/fastp
     *
     * @var string
     */
    public $source;

    /**
     * @description This parameter is required.
     *
     * @example TestWorkspace
     *
     * @var string
     */
    public $workspace;
    protected $_name = [
        'appName'   => 'AppName',
        'source'    => 'Source',
        'workspace' => 'Workspace',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }
        if (null !== $this->source) {
            $res['Source'] = $this->source;
        }
        if (null !== $this->workspace) {
            $res['Workspace'] = $this->workspace;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ImportAppRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }
        if (isset($map['Source'])) {
            $model->source = $map['Source'];
        }
        if (isset($map['Workspace'])) {
            $model->workspace = $map['Workspace'];
        }

        return $model;
    }
}
