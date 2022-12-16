<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models\DescribeIndexTemplateResponseBody;

use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\DescribeIndexTemplateResponseBody\result\template;
use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @example true
     *
     * @var bool
     */
    public $dataStream;

    /**
     * @example cube_default_ilm_policy
     *
     * @var string
     */
    public $ilmPolicy;

    /**
     * @var string[]
     */
    public $indexPatterns;

    /**
     * @example data-stream-default
     *
     * @var string
     */
    public $indexTemplate;

    /**
     * @example 0
     *
     * @var int
     */
    public $priority;

    /**
     * @var template
     */
    public $template;
    protected $_name = [
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
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
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
