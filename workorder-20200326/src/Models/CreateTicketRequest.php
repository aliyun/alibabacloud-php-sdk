<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Workorder\V20200326\Models;

use AlibabaCloud\Dara\Model;

class CreateTicketRequest extends Model
{
    /**
     * @var string
     */
    public $category;

    /**
     * @var string
     */
    public $content;

    /**
     * @var string
     */
    public $email;

    /**
     * @var string
     */
    public $language;

    /**
     * @var string
     */
    public $notifyTimeRange;

    /**
     * @var string
     */
    public $phone;

    /**
     * @var string
     */
    public $productCode;

    /**
     * @var string
     */
    public $secretContent;

    /**
     * @var string
     */
    public $title;
    protected $_name = [
        'category' => 'Category',
        'content' => 'Content',
        'email' => 'Email',
        'language' => 'Language',
        'notifyTimeRange' => 'NotifyTimeRange',
        'phone' => 'Phone',
        'productCode' => 'ProductCode',
        'secretContent' => 'SecretContent',
        'title' => 'Title',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->category) {
            $res['Category'] = $this->category;
        }

        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }

        if (null !== $this->email) {
            $res['Email'] = $this->email;
        }

        if (null !== $this->language) {
            $res['Language'] = $this->language;
        }

        if (null !== $this->notifyTimeRange) {
            $res['NotifyTimeRange'] = $this->notifyTimeRange;
        }

        if (null !== $this->phone) {
            $res['Phone'] = $this->phone;
        }

        if (null !== $this->productCode) {
            $res['ProductCode'] = $this->productCode;
        }

        if (null !== $this->secretContent) {
            $res['SecretContent'] = $this->secretContent;
        }

        if (null !== $this->title) {
            $res['Title'] = $this->title;
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
        if (isset($map['Category'])) {
            $model->category = $map['Category'];
        }

        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }

        if (isset($map['Email'])) {
            $model->email = $map['Email'];
        }

        if (isset($map['Language'])) {
            $model->language = $map['Language'];
        }

        if (isset($map['NotifyTimeRange'])) {
            $model->notifyTimeRange = $map['NotifyTimeRange'];
        }

        if (isset($map['Phone'])) {
            $model->phone = $map['Phone'];
        }

        if (isset($map['ProductCode'])) {
            $model->productCode = $map['ProductCode'];
        }

        if (isset($map['SecretContent'])) {
            $model->secretContent = $map['SecretContent'];
        }

        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }

        return $model;
    }
}
