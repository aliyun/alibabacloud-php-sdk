<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models;

use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\CreateIndexTemplateRequest\template;
use AlibabaCloud\Tea\Model;

class CreateIndexTemplateRequest extends Model
{
    /**
     * @example E1136AE9-4E49-4585-9358-6FDD2A6D****
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description This parameter is required.
     *
     * @var bool
     */
    public $dataStream;

    /**
     * @example policy-1
     *
     * @var string
     */
    public $ilmPolicy;

    /**
     * @description This parameter is required.
     *
     * @var string[]
     */
    public $indexPatterns;

    /**
     * @description This parameter is required.
     *
     * @example index-template
     *
     * @var string
     */
    public $indexTemplate;

    /**
     * @example 100
     *
     * @var int
     */
    public $priority;

    /**
     * @var template
     */
    public $template;
    protected $_name = [
        'clientToken'   => 'ClientToken',
        'dataStream'    => 'dataStream',
        'ilmPolicy'     => 'ilmPolicy',
        'indexPatterns' => 'indexPatterns',
        'indexTemplate' => 'indexTemplate',
        'priority'      => 'priority',
        'template'      => 'template',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->dataStream) {
            $res['dataStream'] = $this->dataStream;
        }
        if (null !== $this->ilmPolicy) {
            $res['ilmPolicy'] = $this->ilmPolicy;
        }
        if (null !== $this->indexPatterns) {
            $res['indexPatterns'] = $this->indexPatterns;
        }
        if (null !== $this->indexTemplate) {
            $res['indexTemplate'] = $this->indexTemplate;
        }
        if (null !== $this->priority) {
            $res['priority'] = $this->priority;
        }
        if (null !== $this->template) {
            $res['template'] = null !== $this->template ? $this->template->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateIndexTemplateRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['dataStream'])) {
            $model->dataStream = $map['dataStream'];
        }
        if (isset($map['ilmPolicy'])) {
            $model->ilmPolicy = $map['ilmPolicy'];
        }
        if (isset($map['indexPatterns'])) {
            if (!empty($map['indexPatterns'])) {
                $model->indexPatterns = $map['indexPatterns'];
            }
        }
        if (isset($map['indexTemplate'])) {
            $model->indexTemplate = $map['indexTemplate'];
        }
        if (isset($map['priority'])) {
            $model->priority = $map['priority'];
        }
        if (isset($map['template'])) {
            $model->template = template::fromMap($map['template']);
        }

        return $model;
    }
}
