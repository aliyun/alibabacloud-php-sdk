<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Docmindapi\V20220711\Models\QueryDocParserStatusResponseBody;

use AlibabaCloud\Tea\Model;

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
     * @var int
     */
    public $pageCountEstimate;

    /**
     * @var int
     */
    public $paragraphCount;

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
        'imageCount'                => 'ImageCount',
        'numberOfSuccessfulParsing' => 'NumberOfSuccessfulParsing',
        'pageCountEstimate'         => 'PageCountEstimate',
        'paragraphCount'            => 'ParagraphCount',
        'status'                    => 'Status',
        'tableCount'                => 'TableCount',
        'tokens'                    => 'Tokens',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->imageCount) {
            $res['ImageCount'] = $this->imageCount;
        }
        if (null !== $this->numberOfSuccessfulParsing) {
            $res['NumberOfSuccessfulParsing'] = $this->numberOfSuccessfulParsing;
        }
        if (null !== $this->pageCountEstimate) {
            $res['PageCountEstimate'] = $this->pageCountEstimate;
        }
        if (null !== $this->paragraphCount) {
            $res['ParagraphCount'] = $this->paragraphCount;
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

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ImageCount'])) {
            $model->imageCount = $map['ImageCount'];
        }
        if (isset($map['NumberOfSuccessfulParsing'])) {
            $model->numberOfSuccessfulParsing = $map['NumberOfSuccessfulParsing'];
        }
        if (isset($map['PageCountEstimate'])) {
            $model->pageCountEstimate = $map['PageCountEstimate'];
        }
        if (isset($map['ParagraphCount'])) {
            $model->paragraphCount = $map['ParagraphCount'];
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
