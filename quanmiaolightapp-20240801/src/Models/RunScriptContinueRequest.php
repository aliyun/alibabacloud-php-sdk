<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models;

use AlibabaCloud\Dara\Model;

class RunScriptContinueRequest extends Model
{
    /**
     * @var string
     */
    public $scriptSummary;

    /**
     * @var string
     */
    public $scriptTypeKeyword;

    /**
     * @var string
     */
    public $userProvidedContent;
    protected $_name = [
        'scriptSummary' => 'scriptSummary',
        'scriptTypeKeyword' => 'scriptTypeKeyword',
        'userProvidedContent' => 'userProvidedContent',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->scriptSummary) {
            $res['scriptSummary'] = $this->scriptSummary;
        }

        if (null !== $this->scriptTypeKeyword) {
            $res['scriptTypeKeyword'] = $this->scriptTypeKeyword;
        }

        if (null !== $this->userProvidedContent) {
            $res['userProvidedContent'] = $this->userProvidedContent;
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
        if (isset($map['scriptSummary'])) {
            $model->scriptSummary = $map['scriptSummary'];
        }

        if (isset($map['scriptTypeKeyword'])) {
            $model->scriptTypeKeyword = $map['scriptTypeKeyword'];
        }

        if (isset($map['userProvidedContent'])) {
            $model->userProvidedContent = $map['userProvidedContent'];
        }

        return $model;
    }
}
