<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\CreateIndexTemplateRequest\template;

class CreateIndexTemplateRequest extends Model
{
    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var bool
     */
    public $dataStream;

    /**
     * @var string
     */
    public $ilmPolicy;

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
    public $priority;

    /**
     * @var template
     */
    public $template;
    protected $_name = [
        'clientToken' => 'ClientToken',
        'dataStream' => 'dataStream',
        'ilmPolicy' => 'ilmPolicy',
        'indexPatterns' => 'indexPatterns',
        'indexTemplate' => 'indexTemplate',
        'priority' => 'priority',
        'template' => 'template',
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

        if (null !== $this->priority) {
            $res['priority'] = $this->priority;
        }

        if (null !== $this->template) {
            $res['template'] = null !== $this->template ? $this->template->toArray($noStream) : $this->template;
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

        if (isset($map['priority'])) {
            $model->priority = $map['priority'];
        }

        if (isset($map['template'])) {
            $model->template = template::fromMap($map['template']);
        }

        return $model;
    }
}
