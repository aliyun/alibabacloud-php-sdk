<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ocrapi\V20210707\Models;

use AlibabaCloud\Tea\Model;
use GuzzleHttp\Psr7\Stream;

class RecognizeEduPaperStructedRequest extends Model
{
    /**
     * @example false
     *
     * @var bool
     */
    public $needRotate;

    /**
     * @example default:默认, Math:数学, PrimarySchool_Math:小学数学, JHighSchool_Math: 初中数学, Chinese:语文, PrimarySchool_Chinese:小学语文, //JHighSchool_Chinese:初中语文, English:英语, PrimarySchool_English:小学英语, JHighSchool_English:初中英语, Physics:物理, JHighSchool_Physics:初中物理   //Chemistry: 化学, JHighSchool_Chemistry:初中化学, Biology:生物, JHighSchool_Biology:初中生物, History:历史, JHighSchool_History:初中历史, Geography:地理,   //JHighSchool_Geography:初中地理, Politics:政治, JHighSchool_Politics:初中政治   "templateType": "Math"
     *
     * @var string
     */
    public $subject;

    /**
     * @example https://img.alicdn.com/tfs/TB1Wo7eXAvoK1RjSZFDXXXY3pXa-2512-3509.jpg
     *
     * @var string
     */
    public $url;

    /**
     * @var Stream
     */
    public $body;
    protected $_name = [
        'needRotate' => 'NeedRotate',
        'subject'    => 'Subject',
        'url'        => 'Url',
        'body'       => 'body',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->needRotate) {
            $res['NeedRotate'] = $this->needRotate;
        }
        if (null !== $this->subject) {
            $res['Subject'] = $this->subject;
        }
        if (null !== $this->url) {
            $res['Url'] = $this->url;
        }
        if (null !== $this->body) {
            $res['body'] = $this->body;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RecognizeEduPaperStructedRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NeedRotate'])) {
            $model->needRotate = $map['NeedRotate'];
        }
        if (isset($map['Subject'])) {
            $model->subject = $map['Subject'];
        }
        if (isset($map['Url'])) {
            $model->url = $map['Url'];
        }
        if (isset($map['body'])) {
            $model->body = $map['body'];
        }

        return $model;
    }
}
