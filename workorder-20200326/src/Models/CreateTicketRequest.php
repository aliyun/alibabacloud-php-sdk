<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Workorder\V20200326\Models;

use AlibabaCloud\Tea\Model;

class CreateTicketRequest extends Model
{
    /**
     * @var string
     */
    public $language;

    /**
     * @var string
     */
    public $title;

    /**
     * @var string
     */
    public $content;

    /**
     * @var string
     */
    public $secretContent;

    /**
     * @var string
     */
    public $productCode;

    /**
     * @var string
     */
    public $category;

    /**
     * @var string
     */
    public $phone;

    /**
     * @var string
     */
    public $email;

    /**
     * @var string
     */
    public $notifyTimeRange;
    protected $_name = [
        'language'        => 'Language',
        'title'           => 'Title',
        'content'         => 'Content',
        'secretContent'   => 'SecretContent',
        'productCode'     => 'ProductCode',
        'category'        => 'Category',
        'phone'           => 'Phone',
        'email'           => 'Email',
        'notifyTimeRange' => 'NotifyTimeRange',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->language) {
            $res['Language'] = $this->language;
        }
        if (null !== $this->title) {
            $res['Title'] = $this->title;
        }
        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }
        if (null !== $this->secretContent) {
            $res['SecretContent'] = $this->secretContent;
        }
        if (null !== $this->productCode) {
            $res['ProductCode'] = $this->productCode;
        }
        if (null !== $this->category) {
            $res['Category'] = $this->category;
        }
        if (null !== $this->phone) {
            $res['Phone'] = $this->phone;
        }
        if (null !== $this->email) {
            $res['Email'] = $this->email;
        }
        if (null !== $this->notifyTimeRange) {
            $res['NotifyTimeRange'] = $this->notifyTimeRange;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateTicketRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Language'])) {
            $model->language = $map['Language'];
        }
        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }
        if (isset($map['SecretContent'])) {
            $model->secretContent = $map['SecretContent'];
        }
        if (isset($map['ProductCode'])) {
            $model->productCode = $map['ProductCode'];
        }
        if (isset($map['Category'])) {
            $model->category = $map['Category'];
        }
        if (isset($map['Phone'])) {
            $model->phone = $map['Phone'];
        }
        if (isset($map['Email'])) {
            $model->email = $map['Email'];
        }
        if (isset($map['NotifyTimeRange'])) {
            $model->notifyTimeRange = $map['NotifyTimeRange'];
        }

        return $model;
    }
}
