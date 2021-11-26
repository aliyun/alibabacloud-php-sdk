<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models\DescribeDeprecatedTemplateResponseBody;

use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\DescribeDeprecatedTemplateResponseBody\result\template;
use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @var bool
     */
    public $dataStream;

    /**
     * @var string[]
     */
    public $indexPatterns;

    /**
     * @var string
     */
    public $indexTemplate;

    /**
     * @var int
     */
    public $order;

    /**
     * @var template
     */
    public $template;

    /**
     * @var string
     */
    public $version;
    protected $_name = [
        'dataStream'    => 'dataStream',
        'indexPatterns' => 'indexPatterns',
        'indexTemplate' => 'indexTemplate',
        'order'         => 'order',
        'template'      => 'template',
        'version'       => 'version',
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
        if (null !== $this->indexPatterns) {
            $res['indexPatterns'] = $this->indexPatterns;
        }
        if (null !== $this->indexTemplate) {
            $res['indexTemplate'] = $this->indexTemplate;
        }
        if (null !== $this->order) {
            $res['order'] = $this->order;
        }
        if (null !== $this->template) {
            $res['template'] = null !== $this->template ? $this->template->toMap() : null;
        }
        if (null !== $this->version) {
            $res['version'] = $this->version;
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
        if (isset($map['indexPatterns'])) {
            if (!empty($map['indexPatterns'])) {
                $model->indexPatterns = $map['indexPatterns'];
            }
        }
        if (isset($map['indexTemplate'])) {
            $model->indexTemplate = $map['indexTemplate'];
        }
        if (isset($map['order'])) {
            $model->order = $map['order'];
        }
        if (isset($map['template'])) {
            $model->template = template::fromMap($map['template']);
        }
        if (isset($map['version'])) {
            $model->version = $map['version'];
        }

        return $model;
    }
}
