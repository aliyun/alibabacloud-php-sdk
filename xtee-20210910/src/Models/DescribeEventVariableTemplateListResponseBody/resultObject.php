<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeEventVariableTemplateListResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeEventVariableTemplateListResponseBody\resultObject\variables;

class resultObject extends Model
{
    /**
     * @var string
     */
    public $templateCode;

    /**
     * @var string
     */
    public $templateName;

    /**
     * @var variables[]
     */
    public $variables;
    protected $_name = [
        'templateCode' => 'templateCode',
        'templateName' => 'templateName',
        'variables' => 'variables',
    ];

    public function validate()
    {
        if (\is_array($this->variables)) {
            Model::validateArray($this->variables);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->templateCode) {
            $res['templateCode'] = $this->templateCode;
        }

        if (null !== $this->templateName) {
            $res['templateName'] = $this->templateName;
        }

        if (null !== $this->variables) {
            if (\is_array($this->variables)) {
                $res['variables'] = [];
                $n1 = 0;
                foreach ($this->variables as $item1) {
                    $res['variables'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['templateCode'])) {
            $model->templateCode = $map['templateCode'];
        }

        if (isset($map['templateName'])) {
            $model->templateName = $map['templateName'];
        }

        if (isset($map['variables'])) {
            if (!empty($map['variables'])) {
                $model->variables = [];
                $n1 = 0;
                foreach ($map['variables'] as $item1) {
                    $model->variables[$n1] = variables::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
