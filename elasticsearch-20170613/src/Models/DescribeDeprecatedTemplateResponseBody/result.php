<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models\DescribeDeprecatedTemplateResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\DescribeDeprecatedTemplateResponseBody\result\template;

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
        'dataStream' => 'dataStream',
        'indexPatterns' => 'indexPatterns',
        'indexTemplate' => 'indexTemplate',
        'order' => 'order',
        'template' => 'template',
        'version' => 'version',
    ];

    public function validate()
    {
        if (\is_array($this->indexPatterns)) {
            Model::validateArray($this->indexPatterns);
        }
        if (null !== $this->template) {
            $this->template->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dataStream) {
            $res['dataStream'] = $this->dataStream;
        }

        if (null !== $this->indexPatterns) {
            if (\is_array($this->indexPatterns)) {
                $res['indexPatterns'] = [];
                $n1 = 0;
                foreach ($this->indexPatterns as $item1) {
                    $res['indexPatterns'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->indexTemplate) {
            $res['indexTemplate'] = $this->indexTemplate;
        }

        if (null !== $this->order) {
            $res['order'] = $this->order;
        }

        if (null !== $this->template) {
            $res['template'] = null !== $this->template ? $this->template->toArray($noStream) : $this->template;
        }

        if (null !== $this->version) {
            $res['version'] = $this->version;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['dataStream'])) {
            $model->dataStream = $map['dataStream'];
        }

        if (isset($map['indexPatterns'])) {
            if (!empty($map['indexPatterns'])) {
                $model->indexPatterns = [];
                $n1 = 0;
                foreach ($map['indexPatterns'] as $item1) {
                    $model->indexPatterns[$n1] = $item1;
                    ++$n1;
                }
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
