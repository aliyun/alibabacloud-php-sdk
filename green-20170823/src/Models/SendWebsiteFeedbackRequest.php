<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Green\V20170823\Models;

use AlibabaCloud\Tea\Model;

class SendWebsiteFeedbackRequest extends Model
{
    /**
     * @var string
     */
    public $feedback;

    /**
     * @var string
     */
    public $lang;

    /**
     * @var string
     */
    public $sourceIp;

    /**
     * @var string
     */
    public $urls;
    protected $_name = [
        'feedback' => 'Feedback',
        'lang'     => 'Lang',
        'sourceIp' => 'SourceIp',
        'urls'     => 'Urls',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->feedback) {
            $res['Feedback'] = $this->feedback;
        }
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->sourceIp) {
            $res['SourceIp'] = $this->sourceIp;
        }
        if (null !== $this->urls) {
            $res['Urls'] = $this->urls;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SendWebsiteFeedbackRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Feedback'])) {
            $model->feedback = $map['Feedback'];
        }
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['SourceIp'])) {
            $model->sourceIp = $map['SourceIp'];
        }
        if (isset($map['Urls'])) {
            $model->urls = $map['Urls'];
        }

        return $model;
    }
}
