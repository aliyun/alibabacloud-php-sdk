<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models\ListIndexTemplatesResponseBody;

use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\ListIndexTemplatesResponseBody\result\template;
use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @var bool
     */
    public $dataStream;

    /**
     * @var string
     */
    public $indexTemplate;

    /**
     * @var string
     */
    public $ilmPolicy;

    /**
     * @var int
     */
    public $priority;

    /**
     * @var string[]
     */
    public $indexPatterns;

    /**
     * @var template
     */
    public $template;
    protected $_name = [
        'dataStream'    => 'dataStream',
        'indexTemplate' => 'indexTemplate',
        'ilmPolicy'     => 'ilmPolicy',
        'priority'      => 'priority',
        'indexPatterns' => 'indexPatterns',
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
        if (null !== $this->indexTemplate) {
            $res['indexTemplate'] = $this->indexTemplate;
        }
        if (null !== $this->ilmPolicy) {
            $res['ilmPolicy'] = $this->ilmPolicy;
        }
        if (null !== $this->priority) {
            $res['priority'] = $this->priority;
        }
        if (null !== $this->indexPatterns) {
            $res['indexPatterns'] = $this->indexPatterns;
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
        if (isset($map['indexTemplate'])) {
            $model->indexTemplate = $map['indexTemplate'];
        }
        if (isset($map['ilmPolicy'])) {
            $model->ilmPolicy = $map['ilmPolicy'];
        }
        if (isset($map['priority'])) {
            $model->priority = $map['priority'];
        }
        if (isset($map['indexPatterns'])) {
            if (!empty($map['indexPatterns'])) {
                $model->indexPatterns = $map['indexPatterns'];
            }
        }
        if (isset($map['template'])) {
            $model->template = template::fromMap($map['template']);
        }

        return $model;
    }
}
