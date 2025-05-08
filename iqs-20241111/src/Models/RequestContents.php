<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IQS\V20241111\Models;

use AlibabaCloud\Dara\Model;

class RequestContents extends Model
{
    /**
     * @var bool
     */
    public $mainText;

    /**
     * @var bool
     */
    public $markdownText;

    /**
     * @var bool
     */
    public $rerankScore;

    /**
     * @var bool
     */
    public $summary;
    protected $_name = [
        'mainText' => 'mainText',
        'markdownText' => 'markdownText',
        'rerankScore' => 'rerankScore',
        'summary' => 'summary',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->mainText) {
            $res['mainText'] = $this->mainText;
        }

        if (null !== $this->markdownText) {
            $res['markdownText'] = $this->markdownText;
        }

        if (null !== $this->rerankScore) {
            $res['rerankScore'] = $this->rerankScore;
        }

        if (null !== $this->summary) {
            $res['summary'] = $this->summary;
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
        if (isset($map['mainText'])) {
            $model->mainText = $map['mainText'];
        }

        if (isset($map['markdownText'])) {
            $model->markdownText = $map['markdownText'];
        }

        if (isset($map['rerankScore'])) {
            $model->rerankScore = $map['rerankScore'];
        }

        if (isset($map['summary'])) {
            $model->summary = $map['summary'];
        }

        return $model;
    }
}
