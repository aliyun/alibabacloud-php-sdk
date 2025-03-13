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

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\RunDocQaResponseBody\payload\output;

use AlibabaCloud\Tea\Model;

class references extends Model
{
    /**
     * @example 2024-10-08 18:00
     *
     * @var string
     */
    public $pubTime;

    /**
     * @var string
     */
    public $source;

    /**
     * @example 123456
     *
     * @var string
     */
    public $sourceDocId;

    /**
     * @var string
     */
    public $title;

    /**
     * @example http://xxxxx
     *
     * @var string
     */
    public $url;
    protected $_name = [
        'pubTime' => 'PubTime',
        'source' => 'Source',
        'sourceDocId' => 'SourceDocId',
        'title' => 'Title',
        'url' => 'Url',
    ];

    public function validate(): void {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->pubTime) {
            $res['PubTime'] = $this->pubTime;
        }
        if (null !== $this->source) {
            $res['Source'] = $this->source;
        }
        if (null !== $this->sourceDocId) {
            $res['SourceDocId'] = $this->sourceDocId;
        }
        if (null !== $this->title) {
            $res['Title'] = $this->title;
        }
        if (null !== $this->url) {
            $res['Url'] = $this->url;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return references
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PubTime'])) {
            $model->pubTime = $map['PubTime'];
        }
        if (isset($map['Source'])) {
            $model->source = $map['Source'];
        }
        if (isset($map['SourceDocId'])) {
            $model->sourceDocId = $map['SourceDocId'];
        }
        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }
        if (isset($map['Url'])) {
            $model->url = $map['Url'];
        }

        return $model;
    }
}
