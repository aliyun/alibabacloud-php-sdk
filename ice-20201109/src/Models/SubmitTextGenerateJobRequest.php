<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Tea\Model;

class SubmitTextGenerateJobRequest extends Model
{
    /**
     * @description The job description, which can be up to 1,024 bytes in length and must be encoded in UTF-8.
     *
     * @var string
     */
    public $description;

    /**
     * @description The text generation configurations, including keywords and the requirements for the word count and number of output copies.
     *
     * @var string
     */
    public $generateConfig;

    /**
     * @description The job title.
     *
     * The value must be encoded in UTF-8.
     * @var string
     */
    public $title;

    /**
     * @description The job type.
     *
     * Valid values:
     *
     *   MarketingCopy: the marketing copy.
     *   Title: the short video title.
     *
     * @example MarketingCopy
     *
     * @var string
     */
    public $type;

    /**
     * @description The user-defined data in the JSON format, which can be up to 512 bytes in length. You can specify a custom callback URL. For more information, see [Configure a callback upon editing completion](https://help.aliyun.com/document_detail/451631.html).
     *
     * @var string
     */
    public $userData;
    protected $_name = [
        'description'    => 'Description',
        'generateConfig' => 'GenerateConfig',
        'title'          => 'Title',
        'type'           => 'Type',
        'userData'       => 'UserData',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->generateConfig) {
            $res['GenerateConfig'] = $this->generateConfig;
        }
        if (null !== $this->title) {
            $res['Title'] = $this->title;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->userData) {
            $res['UserData'] = $this->userData;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SubmitTextGenerateJobRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['GenerateConfig'])) {
            $model->generateConfig = $map['GenerateConfig'];
        }
        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['UserData'])) {
            $model->userData = $map['UserData'];
        }

        return $model;
    }
}
