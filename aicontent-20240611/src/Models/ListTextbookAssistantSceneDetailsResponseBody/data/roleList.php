<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiContent\V20240611\Models\ListTextbookAssistantSceneDetailsResponseBody\data;

use AlibabaCloud\Dara\Model;

class roleList extends Model
{
    /**
     * @var string
     */
    public $introduction;

    /**
     * @var string
     */
    public $introductionTranslate;

    /**
     * @var string
     */
    public $promoting;

    /**
     * @var string
     */
    public $promotingTranslate;

    /**
     * @var string
     */
    public $roleName;

    /**
     * @var string
     */
    public $roleNameTranslate;

    /**
     * @var string
     */
    public $roleType;
    protected $_name = [
        'introduction' => 'introduction',
        'introductionTranslate' => 'introductionTranslate',
        'promoting' => 'promoting',
        'promotingTranslate' => 'promotingTranslate',
        'roleName' => 'roleName',
        'roleNameTranslate' => 'roleNameTranslate',
        'roleType' => 'roleType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->introduction) {
            $res['introduction'] = $this->introduction;
        }

        if (null !== $this->introductionTranslate) {
            $res['introductionTranslate'] = $this->introductionTranslate;
        }

        if (null !== $this->promoting) {
            $res['promoting'] = $this->promoting;
        }

        if (null !== $this->promotingTranslate) {
            $res['promotingTranslate'] = $this->promotingTranslate;
        }

        if (null !== $this->roleName) {
            $res['roleName'] = $this->roleName;
        }

        if (null !== $this->roleNameTranslate) {
            $res['roleNameTranslate'] = $this->roleNameTranslate;
        }

        if (null !== $this->roleType) {
            $res['roleType'] = $this->roleType;
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
        if (isset($map['introduction'])) {
            $model->introduction = $map['introduction'];
        }

        if (isset($map['introductionTranslate'])) {
            $model->introductionTranslate = $map['introductionTranslate'];
        }

        if (isset($map['promoting'])) {
            $model->promoting = $map['promoting'];
        }

        if (isset($map['promotingTranslate'])) {
            $model->promotingTranslate = $map['promotingTranslate'];
        }

        if (isset($map['roleName'])) {
            $model->roleName = $map['roleName'];
        }

        if (isset($map['roleNameTranslate'])) {
            $model->roleNameTranslate = $map['roleNameTranslate'];
        }

        if (isset($map['roleType'])) {
            $model->roleType = $map['roleType'];
        }

        return $model;
    }
}
