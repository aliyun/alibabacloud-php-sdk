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

namespace AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models\RunHotTopicSummaryResponseBody\payload;

use AlibabaCloud\Tea\Model;

class output extends Model
{
    /**
     * @var string
     */
    public $text;

    /**
     * @var string
     */
    public $topicId;
    protected $_name = [
        'text' => 'text',
        'topicId' => 'topicId',
    ];

    public function validate(): void {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->text) {
            $res['text'] = $this->text;
        }
        if (null !== $this->topicId) {
            $res['topicId'] = $this->topicId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return output
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['text'])) {
            $model->text = $map['text'];
        }
        if (isset($map['topicId'])) {
            $model->topicId = $map['topicId'];
        }

        return $model;
    }
}
