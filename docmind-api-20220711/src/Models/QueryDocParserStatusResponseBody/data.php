<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Docmindapi\V20220711\Models\QueryDocParserStatusResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Docmindapi\V20220711\Models\QueryDocParserStatusResponseBody\data\outputFormatResult;

class data extends Model
{
    /**
     * @var int
     */
    public $imageCount;

    /**
     * @var int
     */
    public $numberOfSuccessfulParsing;

    /**
     * @var outputFormatResult[]
     */
    public $outputFormatResult;

    /**
     * @var int
     */
    public $pageCountEstimate;

    /**
     * @var int
     */
    public $paragraphCount;

    /**
     * @var float
     */
    public $processing;

    /**
     * @var string
     */
    public $status;

    /**
     * @var int
     */
    public $tableCount;

    /**
     * @var int
     */
    public $tokens;
    protected $_name = [
        'imageCount' => 'ImageCount',
        'numberOfSuccessfulParsing' => 'NumberOfSuccessfulParsing',
        'outputFormatResult' => 'OutputFormatResult',
        'pageCountEstimate' => 'PageCountEstimate',
        'paragraphCount' => 'ParagraphCount',
        'processing' => 'Processing',
        'status' => 'Status',
        'tableCount' => 'TableCount',
        'tokens' => 'Tokens',
    ];

    public function validate()
    {
        if (\is_array($this->outputFormatResult)) {
            Model::validateArray($this->outputFormatResult);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->imageCount) {
            $res['ImageCount'] = $this->imageCount;
        }

        if (null !== $this->numberOfSuccessfulParsing) {
            $res['NumberOfSuccessfulParsing'] = $this->numberOfSuccessfulParsing;
        }

        if (null !== $this->outputFormatResult) {
            if (\is_array($this->outputFormatResult)) {
                $res['OutputFormatResult'] = [];
                $n1 = 0;
                foreach ($this->outputFormatResult as $item1) {
                    $res['OutputFormatResult'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->pageCountEstimate) {
            $res['PageCountEstimate'] = $this->pageCountEstimate;
        }

        if (null !== $this->paragraphCount) {
            $res['ParagraphCount'] = $this->paragraphCount;
        }

        if (null !== $this->processing) {
            $res['Processing'] = $this->processing;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->tableCount) {
            $res['TableCount'] = $this->tableCount;
        }

        if (null !== $this->tokens) {
            $res['Tokens'] = $this->tokens;
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
        if (isset($map['ImageCount'])) {
            $model->imageCount = $map['ImageCount'];
        }

        if (isset($map['NumberOfSuccessfulParsing'])) {
            $model->numberOfSuccessfulParsing = $map['NumberOfSuccessfulParsing'];
        }

        if (isset($map['OutputFormatResult'])) {
            if (!empty($map['OutputFormatResult'])) {
                $model->outputFormatResult = [];
                $n1 = 0;
                foreach ($map['OutputFormatResult'] as $item1) {
                    $model->outputFormatResult[$n1] = outputFormatResult::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['PageCountEstimate'])) {
            $model->pageCountEstimate = $map['PageCountEstimate'];
        }

        if (isset($map['ParagraphCount'])) {
            $model->paragraphCount = $map['ParagraphCount'];
        }

        if (isset($map['Processing'])) {
            $model->processing = $map['Processing'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['TableCount'])) {
            $model->tableCount = $map['TableCount'];
        }

        if (isset($map['Tokens'])) {
            $model->tokens = $map['Tokens'];
        }

        return $model;
    }
}
