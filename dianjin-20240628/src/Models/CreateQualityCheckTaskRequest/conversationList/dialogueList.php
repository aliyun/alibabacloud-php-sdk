<?php

declare(strict_types=1);

/*
 * This file is part of PHP CS Fixer.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *     Dariusz Rumiński <dariusz.ruminski@gmail.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace AlibabaCloud\SDK\DianJin\V20240628\Models\CreateQualityCheckTaskRequest\conversationList;

use AlibabaCloud\Tea\Model;

class dialogueList extends Model
{
    /**
     * @example 0
     *
     * @var int
     */
    public $begin;

    /**
     * @example 2024-05-23 14:57:50
     *
     * @var string
     */
    public $beginTime;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $content;

    /**
     * @example 2348234
     *
     * @var string
     */
    public $customerId;

    /**
     * @example 23874627346
     *
     * @var string
     */
    public $customerServiceId;

    /**
     * @example 0
     *
     * @var string
     */
    public $customerServiceType;

    /**
     * @example 0
     *
     * @var int
     */
    public $end;

    /**
     * @description This parameter is required.
     *
     * @example 1
     *
     * @var string
     */
    public $role;

    /**
     * @description This parameter is required.
     *
     * @example TEXT
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'begin' => 'begin',
        'beginTime' => 'beginTime',
        'content' => 'content',
        'customerId' => 'customerId',
        'customerServiceId' => 'customerServiceId',
        'customerServiceType' => 'customerServiceType',
        'end' => 'end',
        'role' => 'role',
        'type' => 'type',
    ];

    public function validate(): void {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->begin) {
            $res['begin'] = $this->begin;
        }
        if (null !== $this->beginTime) {
            $res['beginTime'] = $this->beginTime;
        }
        if (null !== $this->content) {
            $res['content'] = $this->content;
        }
        if (null !== $this->customerId) {
            $res['customerId'] = $this->customerId;
        }
        if (null !== $this->customerServiceId) {
            $res['customerServiceId'] = $this->customerServiceId;
        }
        if (null !== $this->customerServiceType) {
            $res['customerServiceType'] = $this->customerServiceType;
        }
        if (null !== $this->end) {
            $res['end'] = $this->end;
        }
        if (null !== $this->role) {
            $res['role'] = $this->role;
        }
        if (null !== $this->type) {
            $res['type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return dialogueList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['begin'])) {
            $model->begin = $map['begin'];
        }
        if (isset($map['beginTime'])) {
            $model->beginTime = $map['beginTime'];
        }
        if (isset($map['content'])) {
            $model->content = $map['content'];
        }
        if (isset($map['customerId'])) {
            $model->customerId = $map['customerId'];
        }
        if (isset($map['customerServiceId'])) {
            $model->customerServiceId = $map['customerServiceId'];
        }
        if (isset($map['customerServiceType'])) {
            $model->customerServiceType = $map['customerServiceType'];
        }
        if (isset($map['end'])) {
            $model->end = $map['end'];
        }
        if (isset($map['role'])) {
            $model->role = $map['role'];
        }
        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        return $model;
    }
}
