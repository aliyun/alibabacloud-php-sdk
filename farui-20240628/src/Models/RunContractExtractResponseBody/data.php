<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\FaRui\V20240628\Models\RunContractExtractResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\FaRui\V20240628\Models\RunContractExtractResponseBody\data\extractResult;

class data extends Model
{
    /**
     * @var string
     */
    public $contractText;

    /**
     * @var extractResult[]
     */
    public $extractResult;
    protected $_name = [
        'contractText' => 'contractText',
        'extractResult' => 'extractResult',
    ];

    public function validate()
    {
        if (\is_array($this->extractResult)) {
            Model::validateArray($this->extractResult);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->contractText) {
            $res['contractText'] = $this->contractText;
        }

        if (null !== $this->extractResult) {
            if (\is_array($this->extractResult)) {
                $res['extractResult'] = [];
                $n1 = 0;
                foreach ($this->extractResult as $item1) {
                    $res['extractResult'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['contractText'])) {
            $model->contractText = $map['contractText'];
        }

        if (isset($map['extractResult'])) {
            if (!empty($map['extractResult'])) {
                $model->extractResult = [];
                $n1 = 0;
                foreach ($map['extractResult'] as $item1) {
                    $model->extractResult[$n1] = extractResult::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
