<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\ListServiceQAResponseBody;

use AlibabaCloud\Dara\Model;

class result extends Model
{
    /**
     * @var bool
     */
    public $active;

    /**
     * @var string
     */
    public $answer;

    /**
     * @var string
     */
    public $gmtModified;

    /**
     * @var string
     */
    public $question;

    /**
     * @var int
     */
    public $serviceQAId;

    /**
     * @var string
     */
    public $templates;
    protected $_name = [
        'active' => 'Active',
        'answer' => 'Answer',
        'gmtModified' => 'GmtModified',
        'question' => 'Question',
        'serviceQAId' => 'ServiceQAId',
        'templates' => 'Templates',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->active) {
            $res['Active'] = $this->active;
        }

        if (null !== $this->answer) {
            $res['Answer'] = $this->answer;
        }

        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }

        if (null !== $this->question) {
            $res['Question'] = $this->question;
        }

        if (null !== $this->serviceQAId) {
            $res['ServiceQAId'] = $this->serviceQAId;
        }

        if (null !== $this->templates) {
            $res['Templates'] = $this->templates;
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
        if (isset($map['Active'])) {
            $model->active = $map['Active'];
        }

        if (isset($map['Answer'])) {
            $model->answer = $map['Answer'];
        }

        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }

        if (isset($map['Question'])) {
            $model->question = $map['Question'];
        }

        if (isset($map['ServiceQAId'])) {
            $model->serviceQAId = $map['ServiceQAId'];
        }

        if (isset($map['Templates'])) {
            $model->templates = $map['Templates'];
        }

        return $model;
    }
}
