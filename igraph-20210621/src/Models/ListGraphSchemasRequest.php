<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Igraph\V20210621\Models;

use AlibabaCloud\Tea\Model;

class ListGraphSchemasRequest extends Model
{
    /**
     * @var string
     */
    public $namespace;

    /**
     * @var string
     */
    public $pageLimit;

    /**
     * @var string
     */
    public $pageStart;

    /**
     * @var string
     */
    public $returnSpec;

    /**
     * @var string
     */
    public $schemaStatus;
    protected $_name = [
        'namespace'    => 'namespace',
        'pageLimit'    => 'pageLimit',
        'pageStart'    => 'pageStart',
        'returnSpec'   => 'returnSpec',
        'schemaStatus' => 'schemaStatus',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->namespace) {
            $res['namespace'] = $this->namespace;
        }
        if (null !== $this->pageLimit) {
            $res['pageLimit'] = $this->pageLimit;
        }
        if (null !== $this->pageStart) {
            $res['pageStart'] = $this->pageStart;
        }
        if (null !== $this->returnSpec) {
            $res['returnSpec'] = $this->returnSpec;
        }
        if (null !== $this->schemaStatus) {
            $res['schemaStatus'] = $this->schemaStatus;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListGraphSchemasRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['namespace'])) {
            $model->namespace = $map['namespace'];
        }
        if (isset($map['pageLimit'])) {
            $model->pageLimit = $map['pageLimit'];
        }
        if (isset($map['pageStart'])) {
            $model->pageStart = $map['pageStart'];
        }
        if (isset($map['returnSpec'])) {
            $model->returnSpec = $map['returnSpec'];
        }
        if (isset($map['schemaStatus'])) {
            $model->schemaStatus = $map['schemaStatus'];
        }

        return $model;
    }
}
