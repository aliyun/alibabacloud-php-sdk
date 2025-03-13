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

namespace AlibabaCloud\SDK\DianJin\V20240628\Models;

use AlibabaCloud\SDK\DianJin\V20240628\Models\CreateQualityCheckTaskRequest\conversationList;
use AlibabaCloud\Tea\Model;

class CreateQualityCheckTaskRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @var conversationList
     */
    public $conversationList;

    /**
     * @description This parameter is required.
     *
     * @example 2024-09-27 11:23:20
     *
     * @var string
     */
    public $gmtService;

    /**
     * @var string[]
     */
    public $metaData;

    /**
     * @var string[]
     */
    public $qualityGroup;

    /**
     * @description This parameter is required.
     *
     * @example 0FC6636E-380A-5369-AE01-D1C15BB9B254
     *
     * @var string
     */
    public $requestId;

    /**
     * @description This parameter is required.
     *
     * @example 0
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'conversationList' => 'conversationList',
        'gmtService' => 'gmtService',
        'metaData' => 'metaData',
        'qualityGroup' => 'qualityGroup',
        'requestId' => 'requestId',
        'type' => 'type',
    ];

    public function validate(): void {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->conversationList) {
            $res['conversationList'] = null !== $this->conversationList ? $this->conversationList->toMap() : null;
        }
        if (null !== $this->gmtService) {
            $res['gmtService'] = $this->gmtService;
        }
        if (null !== $this->metaData) {
            $res['metaData'] = $this->metaData;
        }
        if (null !== $this->qualityGroup) {
            $res['qualityGroup'] = $this->qualityGroup;
        }
        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }
        if (null !== $this->type) {
            $res['type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateQualityCheckTaskRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['conversationList'])) {
            $model->conversationList = conversationList::fromMap($map['conversationList']);
        }
        if (isset($map['gmtService'])) {
            $model->gmtService = $map['gmtService'];
        }
        if (isset($map['metaData'])) {
            $model->metaData = $map['metaData'];
        }
        if (isset($map['qualityGroup'])) {
            if (!empty($map['qualityGroup'])) {
                $model->qualityGroup = $map['qualityGroup'];
            }
        }
        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }
        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        return $model;
    }
}
