<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appstreamcenter\V20210901\Models;

use AlibabaCloud\Dara\Model;

class ListLlmTemplatesRequest extends Model
{
    /**
     * @var string
     */
    public $llmCode;

    /**
     * @var string[]
     */
    public $llmTemplateIds;

    /**
     * @var string
     */
    public $modelTemplateId;

    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $providerTemplateId;
    protected $_name = [
        'llmCode' => 'LlmCode',
        'llmTemplateIds' => 'LlmTemplateIds',
        'modelTemplateId' => 'ModelTemplateId',
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'providerTemplateId' => 'ProviderTemplateId',
    ];

    public function validate()
    {
        if (\is_array($this->llmTemplateIds)) {
            Model::validateArray($this->llmTemplateIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->llmCode) {
            $res['LlmCode'] = $this->llmCode;
        }

        if (null !== $this->llmTemplateIds) {
            if (\is_array($this->llmTemplateIds)) {
                $res['LlmTemplateIds'] = [];
                $n1 = 0;
                foreach ($this->llmTemplateIds as $item1) {
                    $res['LlmTemplateIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->modelTemplateId) {
            $res['ModelTemplateId'] = $this->modelTemplateId;
        }

        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->providerTemplateId) {
            $res['ProviderTemplateId'] = $this->providerTemplateId;
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
        if (isset($map['LlmCode'])) {
            $model->llmCode = $map['LlmCode'];
        }

        if (isset($map['LlmTemplateIds'])) {
            if (!empty($map['LlmTemplateIds'])) {
                $model->llmTemplateIds = [];
                $n1 = 0;
                foreach ($map['LlmTemplateIds'] as $item1) {
                    $model->llmTemplateIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['ModelTemplateId'])) {
            $model->modelTemplateId = $map['ModelTemplateId'];
        }

        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['ProviderTemplateId'])) {
            $model->providerTemplateId = $map['ProviderTemplateId'];
        }

        return $model;
    }
}
