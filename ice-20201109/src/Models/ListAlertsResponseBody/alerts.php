<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\ListAlertsResponseBody;

use AlibabaCloud\Dara\Model;

class alerts extends Model
{
    /**
     * @var string
     */
    public $category;
    /**
     * @var string
     */
    public $code;
    /**
     * @var string
     */
    public $gmtCreate;
    /**
     * @var string
     */
    public $gmtModified;
    /**
     * @var string
     */
    public $message;
    /**
     * @var string
     */
    public $relatedResourceArns;
    /**
     * @var string
     */
    public $resourceArn;
    protected $_name = [
        'category'            => 'Category',
        'code'                => 'Code',
        'gmtCreate'           => 'GmtCreate',
        'gmtModified'         => 'GmtModified',
        'message'             => 'Message',
        'relatedResourceArns' => 'RelatedResourceArns',
        'resourceArn'         => 'ResourceArn',
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

        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }

        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }

        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }

        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }

        if (null !== $this->relatedResourceArns) {
            $res['RelatedResourceArns'] = $this->relatedResourceArns;
        }

        if (null !== $this->resourceArn) {
            $res['ResourceArn'] = $this->resourceArn;
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

        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }

        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }

        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }

        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }

        if (isset($map['RelatedResourceArns'])) {
            $model->relatedResourceArns = $map['RelatedResourceArns'];
        }

        if (isset($map['ResourceArn'])) {
            $model->resourceArn = $map['ResourceArn'];
        }

        return $model;
    }
}
